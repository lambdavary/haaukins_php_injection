FROM php:7.3.3-apache
RUN apt-get update && apt-get upgrade -y && apt-get install netcat -y
RUN docker-php-ext-install mysqli
EXPOSE 80
