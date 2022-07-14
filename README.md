<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Description
This Project is a Laravel aplication using docker containers, that is used to sumulates a e-commerce sales api rest.

## Technologies being used:
- PHP
- Mysql
- Docker

## How to install using docker-compose
### Configure .env
You need do go into src and copy .env.example to .env. After that, you need to set the mysql credentials to be compatible with docker-compose, like this:
```
DB_CONNECTION=mysql
DB_HOST=db-laravel
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=vini
DB_PASSWORD=password
```
### Run:
```
docker-compose build app
docker-compose up -d
```
<p>Ps:For more information about docker click <a href="https://laravel.com/docs/9.x">here</a>.</p>

## Install without docker
If you want to install this without docker check laravel's documentation <a href="https://laravel.com/docs/9.x/installation">here</a>.
