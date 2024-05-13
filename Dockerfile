# Utiliza la imagen base de PHP con Apache
FROM php:8.0-apache

# Instala las extensiones PHP necesarias
RUN docker-php-ext-install mysqli
