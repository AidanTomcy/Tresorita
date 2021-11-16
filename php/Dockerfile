# FROM php:8.0-apache
# RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
FROM php:7
RUN docker-php-ext-install mysqli
RUN apt-get update && apt-get upgrade -y
RUN apt-get install php-mysqlnd
RUN apt-get install php-mysql