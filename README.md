<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
## Sobre este projeto

Este projeto consiste em uma atividade prática de REST API para a disciplina de sistemas distribuídos, ele foi feito em PHP com o framework Laravel 8 e banco de dados MySQL.

Requisitos para instalação e testes:
- Servidor Apache ou NGINX com PHP 7.0 ou superior (Recomendado: <a href="https://laragon.org/">Laragon</a>);
- Servidor MySQL (Recomendado: Laragon ou MySQL Workbench);
- <a href="https://getcomposer.org/">Composer</a>;
- Aplicação Git (<a href="https://desktop.github.com/">GitHub Desktop</a>
- Aplicação para testes de API (<a href="https://www.postman.com/">Postman</a>).

# Instalação

- Instalar Laragon e localizar a pasta /www dentro do local de instalação da aplicação;
- Clonar este repositório dentro da pasta /www do Laragon (precisa estar dentro da pasta /www para funcionar as URLs simplificadas do Laragon);
- Criar uma database no MySQL para o projeto (Ex: dbAPI);
- Copiar a o arquivo .env.example com o nome .env e mudar os seguintes valores:
    - APP_URL: <nome da pasta do projeto dentro do /www>.test (Ex: api-sistemas-distribuidos.test caso esteja usando Laragon);
    - DB_HOST: colocar IP do servidor MySQL ou deixar 127.0.0.1 para a instalação default do Laragon;
    - DB_PORT: trocar a porta caso não esteja usando a 3306;
    - DB_DATABASE: colocar o nome da database criada para o projeto;
    - DB_USERNAME e DB_PASSWORD: colocar as credenciais de login do servidor MySQL (manter os valores caso esteja com a instalação default do Laragon);
- Abrir um terminal ou cmd e entrar na pasta /laragon/www/<pasta do projeto>:
    - Executar o comando: composer install (necessário colocar o Composer como variável global do sistema);
    - Executar o comando: php artisan migrate;

# Testando

