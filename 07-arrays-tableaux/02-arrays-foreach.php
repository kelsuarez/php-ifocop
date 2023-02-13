<?php

$listePays[] = "France";
$listePays[] = "Italie";
$listePays[] = "Espagne";
$listePays[] = "Maroc";
$listePays[] = "Algérie";

// foreach pour parcourir le tableau du dessus
// elle a besoin d'une syntaxe particulière pour bien fonctionner
// as pour stocker en mémoire l'indice, et => pour stocker en mémoire la valeur affiliée a cet indice
// les mots $indice et $valeur ne sont pas des mots clés. Ils peuvent etre remplacés par n'importe quel mot, tant que c'est le même qui est ensuite appelé pour l'affichage
// Dans sa syntaxe, c'est as et => les plus importants
foreach($listePays as $indice => $valeur){
    echo "<p> L'indice $indice a pour valeur le pays : $valeur .</p>";
};

// si je n'ai pas besoin d'afficher l'indice, je peux ne pas le stocker en mémoire avec la syntaxe ci-dessous
// la boucle foreach avec seulement pour information as,comprend que je ne veux stocker pour ensuite afficher, que les valeurs contenues dans le tableau
foreach($listePays as $valeur){
    echo "<li>$valeur </li>";
};