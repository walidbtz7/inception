#!/bin/bash

# Initialize database
if [ ! -d "/var/lib/mysql/mysql" ]; then
    echo 'Initializing database'
    mysqld --initialize-insecure
    echo 'Database initialized'

    echo 'Starting MariaDB'
    mysqld_safe --datadir='/var/lib/mysql' &

    echo 'Waiting for MariaDB to start'
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

    if [ "$MYSQL_DATABASE" ]; then
        echo "CREATE DATABASE $MYSQL_DATABASE;" | mysql -u root

        if [ "$MYSQL_USER" -a "$MYSQL_PA    SSWORD" ]; then
            echo "CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';" | mysql -u root
            echo "GRANT ALL ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%';" | mysql -u root
            echo 'FLUSH PRIVILEGES;' | mysql -u root
        fi
    fi

    echo 'Stopping MariaDB'
    mysqladmin -u root shutdown
fi

echo 'Starting MariaDB'
/usr/bin/mysqld_safe --datadir='/var/lib/mysql'
