FROM php:8.4.6-fpm-alpine3.21

LABEL maintainer="<github.com/felipesantos2>"

# update alpine linux -> apk
RUN apk update && apk add --no--cache \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    unzip \
    icu-dev \
    libxml2-dev \
    openssl-dev \
    git \
    bash \
    --virtual .build-deps gcc g++ make

# Install node and npm
#(link) https://www.ubuntumint.com/install-nodejs-alpine-linux
RUN apk add --no-cache nodejs-current npm

# Install php extensions
RUN docker-php-ext-install gd pdo pdo_mysql

# Install composer
RUN curl -sS https://getcomposer.org/installer | php --  --install-dir=/usr/local/bin --filename=composer
