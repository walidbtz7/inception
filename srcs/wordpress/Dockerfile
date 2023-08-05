FROM debian:buster

RUN apt-get update && apt-get install -y php7.3 \
    php7.3-fpm \
    php7.3-mysql \
    mariadb-client \
    nginx \
    curl

# Downloading WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
# Making the wp-cli.phar file executable and moving it to the /usr/local/bin/ path
# and renaming it 'wp' to use that as the command and not 'wp-cli.phar'
RUN chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
# You may need to copy the necessary files for WordPress setup.
# Assuming you have a directory containing the WordPress files and wp_setup.sh,
# you can uncomment and use the following line to copy them.
COPY . /var/www/html/

WORKDIR /var/www/html/

COPY wp_setup.sh .

RUN chmod +x wp_setup.sh

RUN mkdir -p /run/php

ENTRYPOINT [ "./wp_setup.sh" ]

CMD ["php-fpm7.3", "-F"]
