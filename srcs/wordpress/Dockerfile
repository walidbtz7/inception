FROM php:7.4-fpm-alpine

RUN apk update && apk add --no-cache \
    autoconf \
    g++ \
    libtool \
    make \
    curl \
    libmcrypt-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libxml2-dev \
    freetype-dev

RUN docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql gd soap

# download wordpress
RUN curl -o wordpress.tar.gz -fSL "https://wordpress.org/latest.tar.gz" \
    && tar -xzf wordpress.tar.gz -C /usr/src/ \
    && rm wordpress.tar.gz

COPY --chown=www-data:www-data --from=wordpress /usr/src/wordpress /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
# start the PHP-FPM server
CMD ["php-fpm"]