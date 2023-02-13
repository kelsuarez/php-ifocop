<?php

$couleur = "bleu";

// il faut privilégier la switch a la condition if/elseif s'il y a trop de cas de figure à vérifier (au delà de 5). La switch s'exécutera plus vite

switch($couleur){
    case "vert":
        echo "La couleur est vert";
        break;
    case "bleu":
        echo "La couleur est bleu <br>";
        break;
    default:
        echo "Aucune couleur n'existe";
        break;
}

// son équivalente avec if
if($couleur == "vert"){
    echo "La couleur est vert";
}elseif( $couleur == "rouge"){
    echo "La couleur est rouge";
}else{
    echo "Pas la bonne couleur";
}