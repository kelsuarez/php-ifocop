<?php

$listePays[] = "France";
$listePays[] = "Italie";
$listePays[] = "Espagne";
$listePays[] = "Maroc";
$listePays[] = "Algérie";

// implode permet d'extraire les éléments d'un tableau pour les afficher
// le premier argument, le séparateur pour aérer l'affichage des valeurs, n'est pas obligatoire. Par contre, si on veut un séparateur, il faut le donner en premier et pas second argument, cela ne fonctionnerait pas
echo "<p>" . implode(' - ', $listePays) . "</p>";

// count et sizeof permettent de compter le nombre d'entrées dans un tableau
// count() est plus souvent utilisé, mais sizeof se rencontre aussi dans des scripts (habitudes, pratique etc...)
echo count($listePays) . "<br>";
echo sizeof($listePays) . "<br>";

// une boucle for (avec utilisation de count() ) pour parcourir un tableau
// nommage de la variable à initialiser: en $valeur (pas obligatoire qu'elle s'appelle $i)
for($valeur = 0; $valeur < count($listePays); $valeur++){
    echo "<ul>";
        echo "<li>" . $listePays[$valeur] . "</li>";
    echo "</ul>";
};