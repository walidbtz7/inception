FROM debian:bookworm

RUN apt-get update && apt-get install -y php8.2 \
    php8.2-fpm \
    php8.2-mysql \
    mariadb-client \
    nginx \
    curl

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar && mv wp-cli.phar /usr/local/bin/wp

COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf

COPY . /var/www/html/

WORKDIR /var/www/html/

COPY wp_setup.sh .

RUN chmod +x wp_setup.sh

RUN mkdir -p /run/php

ENTRYPOINT [ "./wp_setup.sh" ]

CMD ["php-fpm8.2", "-F"]
