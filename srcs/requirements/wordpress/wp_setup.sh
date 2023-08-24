#!/bin/bash

cd /var/www/html/wordpress

wp core download --allow-root --path=/var/www/html/wordpress

wp core config --dbname=${MYSQL_DATABASE} --dbuser=${MYSQL_USER} --dbpass=${MYSQL_PASSWORD} --dbhost=${DB_HOST} --allow-root --path=/var/www/html/wordpress

wp core install --url=${DOMAIN_NAME} --title="inception" --admin_user=${WP_USER} --admin_password=${WP_PW} --admin_email=${WP_EMAIL} --allow-root --path=/var/www/html/wordpress

wp user create ${WP_USER2} ${WP_EMAIL2} --role=administrator --user_pass=${WP_PW2} --allow-root --path=/var/www/html/wordpress

# Start PHP-FPM.
exec "$@"
