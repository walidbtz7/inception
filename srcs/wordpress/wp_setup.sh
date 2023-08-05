#!/bin/bash

# Change to the directory where WordPress is located.
cd /var/www/html/wordpress

# Download and install WordPress using WP-CLI with the correct path.
wp core download --allow-root --path=/var/www/html/wordpress

# Create the wp-config.php file with the provided environment variables.
wp core config --dbname=${MYSQL_DATABASE} --dbuser=${MYSQL_USER} --dbpass=${MYSQL_PASSWORD} --dbhost=${DB_HOST} --allow-root --path=/var/www/html/wordpress

# Install WordPress using the provided environment variables.
wp core install --url=${DOMAIN_NAME} --title="insception" --admin_user=${WP_USER} --admin_password=${WP_PW} --admin_email=${WP_EMAIL} --allow-root --path=/var/www/html/wordpress

# Start PHP-FPM.
exec "$@"
