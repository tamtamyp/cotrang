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
    addgroup -g 82 www-data &&\
    adduser -u 82 -G www-data www-data --disabled-password &&\
    install -d -m 0755 -o www-data -g www-data /home/www-data

COPY ./docker/php/php.ini /usr/local/etc/php/php.ini
COPY . /app

RUN chown -R www-data:www-data /app

USER www-data
#expose bắt buộc phải là user www-data (nếu k sẽ chết quyền của fpm)
EXPOSE 9000 
# set lại user để khi exec bằng docker-compose sẽ default = root
USER root
