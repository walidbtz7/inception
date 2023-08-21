#!/bin/bash

BIND_ADDRESS="0.0.0.0"

if [ ! -d "/var/lib/mysql/mysql" ]; then
    echo 'Initializing database'
    mysqld --initialize-insecure
    echo 'Database initialized'
fi

if [ "$MYSQL_DATABASE" ]; then
    mysqld_safe --datadir='/var/lib/mysql' --bind-address="${BIND_ADDRESS}" &
    sleep 5

    echo "Starting MariaDB with bind-address=${BIND_ADDRESS}"
    for i in {30..0}; do
        if echo 'SELECT 1' | mysql -uroot &> /dev/null; then
            break
        fi
        echo -n '.'
        sleep 1
    done

    if [ "$i" = 0 ]; then
        echo >&2 'MariaDB start failed.'
        exit 1
    fi

    echo "CREATE DATABASE IF NOT EXISTS $MYSQL_DATABASE;" | mysql -u root
    if [ "$MYSQL_USER" ] && [ "$MYSQL_PASSWORD" ]; then
        echo "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';" | mysql -u root
        echo "GRANT ALL ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%';" | mysql -u root
        echo 'FLUSH PRIVILEGES;' | mysql -u root
    fi

    mysqladmin -uroot shutdown
fi

exec mysqld_safe --datadir='/var/lib/mysql' --bind-address="${BIND_ADDRESS}"