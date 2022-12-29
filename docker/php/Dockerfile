FROM php:8.1-fpm-alpine

# Arguments defined in docker-compose.yml

RUN apk update \
    && apk upgrade \
    && apk add --no-cache \
        freetype \
        libpng \
        libjpeg-turbo \
        freetype-dev \
        libpng-dev \
        jpeg-dev \
        libjpeg \
        libzip-dev \
        libjpeg-turbo-dev \
        zlib \
        unzip \
        npm

RUN docker-php-ext-install mysqli pdo pdo_mysql gd bcmath zip

RUN deluser www-data &&\
    if getent group www-data ; then delgroup www-data; fi &&\
    addgroup -g 1000 www-data &&\
    adduser -u 1000 -G www-data www-data --disabled-password &&\
    install -d -m 0755 -o www-data -g www-data /home/www-data

COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY . /app

RUN chown -R www-data:www-data /app
# RUN www-data -a -G www-data ubuntu
RUN find /app -type f -exec chmod 644 {} \;
RUN find /app -type d -exec chmod 755 {} \;
RUN chgrp -R www-data app/storage
RUN chmod -R ug+rwx app/storage

USER www-data

EXPOSE 9000
CMD ["php-fpm"]

WORKDIR /var/www

USER root