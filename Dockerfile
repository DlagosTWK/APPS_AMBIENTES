FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
  vim

RUN docker-php-ext-install mysqli
RUN pecl install mongodb && docker-php-ext-enable mongodb
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN echo "extension=mongodb.so" > $PHP_INI_DIR/conf.d/mongodb.ini

COPY src/ /var/www/html/
