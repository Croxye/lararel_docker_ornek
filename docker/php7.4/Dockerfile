FROM php:7.4-fpm

RUN apt-get update && apt-get install -y \
    zip unzip \
    git \
    curl \
    libzip-dev


RUN docker-php-ext-install \
    zip \
    mysqli \
    bcmatch \
    ctype \
    pdo_mysql \
    fileinfo \
    pdo \
    tokenizer


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chown -R www-data:www:data /var/www/html
