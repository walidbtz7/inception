FROM debian:bullseye

RUN apt-get update && apt-get install -y php7.4 \
    php7.4-fpm \
    php7.4-mysql \
    mariadb-client \
    nginx \
    curl

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

COPY www.conf /etc/php/7.4/fpm/pool.d/www.conf

COPY . /var/www/html/

WORKDIR /var/www/html/

COPY wp_setup.sh .

RUN chmod +x wp_setup.sh

RUN mkdir -p /run/php

ENTRYPOINT [ "./wp_setup.sh" ]

CMD ["php-fpm7.4", "-F"]
