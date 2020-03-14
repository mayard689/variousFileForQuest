<?php

$movie1=array(
    "name"=>"Les aventuriers de l'arche perdue",
    "actor1"=>"Harrison Ford",
    "actor2"=>"Karen Allen",
    "actor3"=>"Paul Freeman",
);

$movie2=array(
    "name"=>"Indiana Jones et le temple maudit",
    "actor1"=>"Harrison Ford",
    "actor2"=>"Kate Capshaw",
    "actor3"=>"Jonathan Ke Quan",
);
    
$movie3=array(
    "name"=>"La dernière croisade",
    "actor1"=>"Harrison Ford",
    "actor2"=>"Sean Connery",
    "actor3"=>"Denholm Elliott",
); 

$movies=[$movie1,$movie2,$movie3];

foreach ($movies as $movie){
    echo "Dans le film ".$movie['name'].", les principaux acteurs sont :". $movie['actor1'].", ".$movie['actor2']." et ".$movie['actor3']."\n";
}
