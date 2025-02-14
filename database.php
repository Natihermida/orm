<?php
require "vendor/autoload.php";//  importar la clase autoload de composer
use Illuminate\Database\Capsule\Manager as Capsule;//importar la clase Capsule de Eloquent

$capsule = new Capsule;

$capsule->addConnection([//configuracion de la base de datos
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'sakila',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

?>
