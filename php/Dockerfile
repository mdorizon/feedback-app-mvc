FROM php:8.1-apache

WORKDIR /var/www/html

# Copy php.ini into image
COPY php.ini /usr/local/etc/php/

# Install PDO MySQL extension
RUN docker-php-ext-install pdo_mysql

# Install and enable Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug