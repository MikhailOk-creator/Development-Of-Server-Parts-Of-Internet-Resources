FROM php:8.1-apache
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html/
COPY . .
COPY ports.conf /etc/apache2/ports.conf
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
RUN docker-php-ext-install mysqli