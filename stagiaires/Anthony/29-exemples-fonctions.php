<?php

$nombre1 =17;


//Affiche le type de la variable
// echo gettype($nombre1);

 //echo "<hr>";

//Modifie le type (fonctionne comme une procédure
// sauf qu'il renvoie true en cas de succès et false en cas d'échec)
 //settype($nombre1, "string");

 //echo gettype($nombre1);



/*Pour créer une fonction, on utilise le mot clé function suivi du nom de la fonction (règles de nommage des variables sans le & 
suivies des (){})*/

function helloWorld(){
    return "Hello World !";
}

//Une fonction n'est executé que lorsqu'on l'appelle

echo helloWorld();

function lanceDe(int $faces):array|bool{
    $array =  array();
    for($i=1;$i<=$faces;$i++){
        $array[$i] = $i;
    }
    $array["Win"] = random_int(1,$faces);
    return $array;
}

var_dump(lanceDe(6)) ;

















 ?>

 