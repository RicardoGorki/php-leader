# php-leader
https://www.php.net/manual/pt_BR/langref.php

/etc/php/8.1/fpm/php.ini // voltar debug pra off


MYSQL CONFIG<br />
sudo mysql<br />
create database leader;<br />
grant all privileges on leader.* to leader@localhost identified by 'root';<br />
use leader;<br />
source src/database/database.sql;<br />
show tables;<br />
