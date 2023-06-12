#!/bin/sh

# Start MariaDB
/etc/init.d/mariadb start

# Wait for MariaDB to start
while ! mysqladmin ping -hlocalhost --silent; do
    sleep 1
done

# Set up the database and user
mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"
mysql -uroot -e "GRANT ALL ON ${MYSQL_DATABASE}.* TO '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';"
mysql -uroot -e "GRANT ALL ON *.* TO '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}' WITH GRANT OPTION;"
mysql -uroot -e "FLUSH PRIVILEGES;"

# Stop MariaDB
/etc/init.d/mariadb stop

# Run MariaDB in the foreground
/usr/bin/mysqld_safe --datadir='/var/lib/mysql'
