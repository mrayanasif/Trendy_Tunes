FROM php:8.2-apache

# MySQL Database connection extensions install karne ke liye
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Project files copy karne ke liye
COPY . /var/www/html/

# Apache rewrite module enable karne ke liye
RUN a2enmod rewrite

EXPOSE 80