#!/bin/bash
set -e

# Start the MariaDB server to perform initial setup tasks
mysqld &

# Wait for the server to be ready
while ! mysqladmin ping --silent; do
    sleep 1
done

# Set up the database and user
mysql -uroot -e "CREATE DATABASE IF NOT EXISTS ${MYSQL_DATABASE};"
mysql -uroot -e "GRANT ALL ON ${MYSQL_DATABASE}.* TO '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';"
mysql -uroot -e "GRANT ALL ON *.* TO '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}' WITH GRANT OPTION;"
mysql -uroot -e "FLUSH PRIVILEGES;"

# Wait for a few more seconds to ensure the setup tasks are completed
sleep 5

# The script exits here, and the container continues running with the entrypoint script.
