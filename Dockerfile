FROM 8.3-rc-zts-alpine3.21

RUN docker-php-ext-install pdo pdo_mysql
