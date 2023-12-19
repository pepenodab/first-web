Hi :), this is my first web with my friend @Sandysan2005

We are using PHP-apache, phpmyadmin and MYSQL, all on Docker. 

Docker version 24.0.6
docker-compose version 2.23.3

Im going to explain how to prepare our proyect,

First you have to get up the compose with docker-compose up -d 

Creation database on phpmyadmin or database container:

CREATE DATABASE users;
CREATE TABLE customers(
    username VARCHAR(20) PRIMARY KEY NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(20) NOT NULL
);

Now need to install a php-ext at the container, (exec docker-php)

docker-php-ext-install mysqli

apt-get update

apt-get install nano

You have to enter at /usr/local/etc/php

At; php# nano php.ini-development

Add; extension=/usr/local/lib/php/extensions/no-debug-non-zts-20151012/msqli.os

You must do the same at php.ini-production

Now you have to exec database container, and do the next;

mysql -u root -p

ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';
