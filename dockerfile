# Utilisez l'image php:8.2-apache comme base
FROM php:8.2-apache

# Mettez à jour les packages existants
RUN apt-get update && apt-get upgrade -y

# Installez l'extension mysqli pour PHP
RUN docker-php-ext-install mysqli

# Exposez le port 80
EXPOSE 80
