<?php

require "vendor/autoload.php";
require "database.php";
use app\Models\Actor;
use app\Models\Film;
/*
$actors = Actor::all();

foreach($actors as $actor){
    echo "{$actor->first_name}<br>";
}
/*
//añadior un nuevo registro de actor
$actor = new Actor;
$actor->first_name = "Lucia";
$actor->save();*/

//busqueda parcial con like
/*
$actor = Actor::where("first_name","like","%A%")->get();
var_dump($actor);*/
//ver todas las peliculas */
/*
$peliculas=Film::all();
foreach ($peliculas as $value) {
    echo $value->title . "<br>"; 
}*/
$peliculas = Film::all();
foreach($peliculas  as $pelicula) {
    echo $pelicula->title . "<br>";
    foreach ($pelicula -> actors as $actor) {
        echo $actor->first_name . " " . $actor->last_name . "<br>";
    }
}
?>
