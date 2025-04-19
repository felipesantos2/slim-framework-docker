FROM php:8.4.6-fpm-alpine3.21

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

RUN docker-php-ext-install gd pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php --  --install-dir=/usr/local/bin --filename=composer

# docker build -t php_image_84_alpine .
# docker run -d --name php84 php_image_84_alpine
# docker exec -it php84 bash