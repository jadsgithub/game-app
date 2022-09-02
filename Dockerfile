#------------- Setup Environment -------------------------------------------------------------

# Pull base image
FROM ubuntu:18.04
ENV TZ=America/Sao_Paulo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Install common tools 
RUN apt-get update
RUN apt-get install -y wget curl nano htop git unzip bzip2 software-properties-common locales

# Set evn var to enable xterm terminal
ENV TERM=xterm

# Set working directory
WORKDIR /var/www/html

COPY . ./

# Add repositories
RUN LC_ALL=C.UTF-8 apt-add-repository ppa:ondrej/php
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys ABF5BD827BD9BF62
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C
RUN echo "deb http://nginx.org/packages/ubuntu/ trusty nginx" >> /etc/apt/sources.list
RUN echo "deb-src http://nginx.org/packages/ubuntu/ trusty nginx" >> /etc/apt/sources.list

RUN apt-get update

#------------- Application Specific Stuff ----------------------------------------------------

# Install PHP
RUN apt-get update
RUN apt-get install -y \
    php8.1-fpm \ 
    php8.1-common \ 
    php8.1-curl \ 
    php8.1-mysql \ 
    php8.1-mbstring \ 
    php8.1-xml \
    php8.1-bcmath \
    php8.1-gd \
    php8.1-xdebug \
    php8.1-soap \
    php8.1-zip   

RUN echo "xdebug.mode=develop" >> /etc/php/8.1/mods-available/xdebug.ini

#------------- FPM & Nginx configuration ----------------------------------------------------

# Config fpm to use TCP instead of unix socket
ADD docker/www.conf /etc/php/8.1/fpm/pool.d/www.conf
RUN mkdir -p /var/run/php

# Install Nginx
RUN apt-get install -y nginx

ADD docker/game /etc/nginx/sites-enabled/

ADD docker/nginx.conf /etc/nginx/

#------------- Composer & laravel configuration ----------------------------------------------------

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#------------- Supervisor Process Manager ----------------------------------------------------

# Install supervisor
RUN apt-get install -y supervisor
RUN mkdir -p /var/log/supervisor
ADD docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

#------------- Container Config ---------------------------------------------------------------
ARG ENV_KEY=dev

COPY ./.${ENV_KEY}.env ./.env

RUN chown -R www-data:www-data ./

# Expose port 80
EXPOSE 80

# Set supervisor to manage container processes
ENTRYPOINT ["/usr/bin/supervisord"]