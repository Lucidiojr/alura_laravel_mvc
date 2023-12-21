php 8 / composer

php.ini

habilitar

extensions

;extension=zip

    Failed to download laravel/laravel from dist: The zip extension and unzip/7z commands are both missing, skipping.
The php.ini used by your command-line PHP is: C:\php83\php.ini
    Now trying to download from source

fileinfo 

;extension=fileinfo

    - laravel/framework[v10.10.0, ..., v10.38.1] require league/flysystem ^3.8.0 -> satisfiable by league/flysystem[3.8.0, ..., 3.23.0].

composer create-project laravel/laravel

composer create-project laravel/laravel teste ^9

\app\http\controllers

\resources\views

\routes\web.php

php artisan serve (servidor)

Target class [SeriesController] does not exist.

faltou use App\Http\Controllers\SeriesController; no web.php routes

Resource Controllers php artisan make -------> opcoes de reources (index,update,.......)

verificar exemplos de request e response nos comentarios do SeriesController

configuracoes BD LARAVEL

\config

database.php

.env (VARIAVEIS DE AMBIENTE)

Class "App\Http\Controllers\DB" not found

use DB

erro chamada pagina

colocar @CSRF

habilitar drive mysql

php.ini

extension=mysqli
extension=pdo_mysql

