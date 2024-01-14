## Clonar dentro dos caminhos absolutos abaixo
https://github.com/RicardoGorki/php-leader.git <br /><br />
linux
```sh
cd /var/www/html
````
windows
```sh
c:/wamp64/htdocs
````
mac
```sh
cd /mamp/htdocs
````

## MYSQL
>Executar no terminal
>precisa estar dentro da pasta raiz php-leader para funcionar o source;
```sh
sudo mysql
create database leader;
grant all privileges on leader.* to leader@localhost identified by 'root';
use leader;
source src/database/database.sql;
show tables;
```

## RUN
Em seu navegador
>http://localhost/php-leader

## guia de instalação webserver/mysql/php/
>WAMP (WINDOWS)
https://www.devmedia.com.br/instalacao-do-wampserver/25871
>LAMP (LINUX)
https://www.treinaweb.com.br/blog/criando-um-ambiente-de-desenvolvimento-php-com-wsl
>MAMP (MAC)
https://www.mirago.com.br/aula/instalar-mamp-mac/
