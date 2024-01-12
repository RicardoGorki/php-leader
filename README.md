# php-leader
https://www.php.net/manual/pt_BR/langref.php

/etc/php/8.1/fpm/php.ini // voltar debug pra off


MYSQL CONFIG
sudo mysql
create database leader;
grant all privileges on leader.* to leader@localhost identified by 'root';
use leader;
source src/database/database.sql;
show tables;
