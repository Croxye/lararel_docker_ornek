FROM php:7.3-fpm

RUN apt-get update && apt-get install -y \
    zip unzip \
    git \
    curl \
    libzip-dev \
    libxml2-dev \
    libldap2-dev \
    libgd-dev


RUN docker-php-ext-install \
    gd \
    zip \
    ldap \
    mysqli \
    bcmatch \
    ctype \
    pdo \
    pdo_mysql \
    fileinfo \
    tokenizer


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chown -R www-data:www:data /var/www/html
