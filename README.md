<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sobre o projeto

Este projeto consiste em uma atividade prática de REST API para a disciplina de sistemas distribuídos que permite a realização de um CRUD simples de filmes. Ele foi feito em PHP com o framework Laravel 8 e banco de dados MySQL.

Requisitos para instalação e testes:
- Servidor Apache ou NGINX com PHP 7.0 ou superior (Recomendado: <a href="https://laragon.org/">Laragon</a>);
- Servidor MySQL (Recomendado: Laragon ou MySQL Workbench);
- <a href="https://getcomposer.org/">Composer</a>;
- Aplicação Git (<a href="https://desktop.github.com/">GitHub Desktop</a>);
- Aplicação para testes de API (<a href="https://www.postman.com/">Postman</a>).

# Instalação

- Instalar Laragon e localizar a pasta /www dentro do local de instalação da aplicação;
- Clonar este repositório dentro da pasta /www do Laragon (precisa estar dentro da pasta /www para funcionar as URLs simplificadas do Laragon);
- Criar uma database no MySQL para o projeto (Ex: dbAPI);
- Copiar a o arquivo ".env.example" com o nome ".env" e mudar os seguintes valores:
    - APP_URL: <nome da pasta do projeto dentro do /www>.test (Ex: "api-sistemas-distribuidos.test" caso esteja usando Laragon);
    - DB_HOST: colocar IP do servidor MySQL ou deixar 127.0.0.1 para a instalação default do Laragon;
    - DB_PORT: trocar a porta caso não esteja usando a 3306;
    - DB_DATABASE: colocar o nome da database criada para o projeto;
    - DB_USERNAME e DB_PASSWORD: colocar as credenciais de login do servidor MySQL (manter os valores caso esteja com a instalação default do Laragon);
- Abrir um terminal ou cmd e entrar na pasta "/laragon/www/\<pasta do projeto\>":
    - Executar o comando: "composer install" (necessário colocar o Composer como variável global do sistema);
    - Executar o comando: "php artisan migrate";

# Testando
Para verificar se a instalação ocorreu como o esperado, acesse no browser a URL que você especificou no APP_URL do arquivo ".env" e verifique se uma página HTML com as rotas de CRUD é carregada.

Em seguida acesse o Postman e importe a collection: <a href="https://www.postman.com/collections/b6281c8d725472936712"> https://www.postman.com/collections/b6281c8d725472936712 </a>.
    
> Botão IMPORT -> Aba link
    
Para cada rota especificada, edite a URL base de acordo com a URL do seu projeto, além disso:
- Para rota de SHOW: edite o ID do filme que deseja consultar Ex: <url-projeto>/api/movie/\<id\>
- Para rota de CREATE: abra a aba BODY e edite o JSON de acordo com os valores que desejar;
- Para rota UPDATE: edite o ID do filme que deseja consultar e na aba BODY edite o JSON de acordo com os valores que desejar;
- Para rota DELETE: edite o ID do filme que deseja deletar;
    
É de suma importância utiizar o header "Accept: application/vnd.api+json" nas rotas de API para obter respostas e erros no formato JSON (caso contrário para erros aparecerá apenas uma página HTML com um erro 4xx ou 5xx). Além disso, deve-se atentar ao verbo HTTP adequado para cada rota (GET, POST...).
    
# Sobre o código
    
O Laravel utiliza o padrão de projeto MVC, portanto para a manipulação de filmes no CRUD existe:
- Uma model: "/app/Models/Movie";
- Um controller: "/app/Http/Controllers/MovieController";
- Não há views pois o projeto é uma API JSON (apenas a view de Welcome disponível na rota raiz do projeto);
    
Para gerar a tabela no banco de dados é usada uma "migration" que consiste na "receita" para criar a tabela (a migration é executada com o comando "php artisan migrate").
    
O fluxo principal é iniciado pelo roteador do Laravel "/routes/api" onde estão descritas cada rota e ação atrelada a ela (Ex: MovieController@show executa a função "show" do MovieController). Para rotas POST e PATCH os dados de formulário ou body da requisição são validados pela classe "/app/Http/Requests/MovieRequest" que contém as regras de validação para cada campo da requisição. 
    
Para as manipulações de banco de dados é utilizado o Eloquent do Laravel que através da Model "Movie" executa as querys MySQL de forma transparente.
