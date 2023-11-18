FROM php:8.0-fpm

RUN apt-get update && apt-get install -y \
    zip unzip \
    git \
    curl \
    libcurl4-openssl-dev \
    libxml2-dev \
    libssl-dev \
    libpcre3-dev \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libldap-dev

RUN docker-php-ext-configure intl && docker-php-ext-install intl
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && docker-php-ext-install gd

RUN docker-php-ext-install ldap
RUN docker-php-ext-install zip
RUN docker-php-ext-install soap
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install ctype
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install curl
RUN docker-php-ext-install dom
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install filter
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install pdo
RUN docker-php-ext-install session
RUN docker-php-ext-install tokenizer
RUN docker-php-ext-install xml

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chown -R www-data:www-data /var/www/html
