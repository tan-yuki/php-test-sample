FROM php:7.2

MAINTAINER "tan-yuki" <a0673040@gmail.com>


RUN apt-get update -y
RUN apt-get install -y git unzip
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer self-update

RUN mkdir /work
WORKDIR /work
VOLUME ["/work"]
