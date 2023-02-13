<?php

// un array/tableau est un type de variable comme : string, integer, boolean etc...
// la différence, est qu'il peut stocker plusieurs valeurs, alors qu'une valeur de type string (et les autres) ne pourra stocker qu'une seule chaine de caractères (ou entier etc...)

$listePrenoms = "Hélène, Tania, Moncef, Barry, Erwann";
echo $listePrenoms . "<br>";

// pour déclarer un tableau, il faut utiliser le mot clé array, puis insérer chaque valeur et la séparant de la suivante avec une virgule
// si le nombre de valeurs est trop important, pour une lisibilité plus simple, le tableau sera aéré comme si dessous

$tableauPrenoms = array(
    'Hélène',
    'Tania',
    'Moncef',
    'Barry',
    'Erwan'
);

echo "<pre>"; print_r($tableauPrenoms); echo "</pre>";
// la balise <pre> sert à aérer l'affichage des valeurs tableaux, si leur nombre est très important.

print_r($tableauPrenoms);

echo "<pre>"; var_dump($tableauPrenoms); echo "</pre>";
// le var_dump donne encore plus de précisions quand aux valeurs stockées dans le tableau (leur type, la length, etc...)

// seconde syntaxe pour déclarer un tableau 

$listePays[] = "France";
$listePays[] = "Italie";
$listePays[] = "Espagne";
$listePays[] = "Maroc";
$listePays[] = "Algerie";

// affichage conventionnel du mot Espagne, extrait du tableu
// il faut crocheter à l'indice du pays pour pouvoir le récupérer

echo $listePays[2] . "<br>";

$tableauPrenoms[] = "Kelvin";
// pour rajouter un element a un tableau deja existant, on met ça dans []

// Si au contraire on fait

// $tableauPrenoms = array('Kelvin');

// Il va suprimer tout les autres elements que j'avais deja dans ma liste et les remplacer pour 1 seul dans ce cas

echo "<pre>"; var_dump($tableauPrenoms); echo "</pre>";