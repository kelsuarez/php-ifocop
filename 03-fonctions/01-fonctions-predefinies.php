<?php

$phrase = "Nous sommes à Ifocop Paris";

// les deux fonctions vont calculer la longueur d'une chaine de caractères (contrainte input formulaire)
echo iconv_strlen($phrase) . "<br>";
// la différence entre les deux c'est que strlen va aussi comptabiliser les caractères spéciaux (ici  à et les compter comme deux caractères)
echo strlen($phrase) . "<br>";

// substr() permet de sélectionner, découper un morceau d'une chaine de caractères
echo substr($phrase, 0, 13) . "<br>";

// substr() permet par exemple, de manière dynamique de récupérer un mot au pluriel en BDD, et le passer au singulier, qlq soit le cas de figure
// il faudrait pour cela supprimer la dernière lettre en donnant une valeur négative au troisième argument
echo substr($phrase, 0, -1) . "<br>";

// date récupère la date du jour (changer les minuscules en majuscules pour voir le changement d'affichage)
// On peut aussi ne lui donner que Y en argument, elle affichera l'année en cours de manière dynamique
 echo "&copy; - " . date('d / m / Y') . " - Mon Site <br>";

//  empty teste si une variable a reçu un contenu (différent de isset qui teste si la variable existe)
 if(empty($phrase)){
    echo "Aucun contenu n'a été affecté à la variable";
 }else{
    echo "La variable a bien reçu un contenu <br>";
 }

//  exemple ci dessous pour comparer isset et empty (la variable existe, mais n'a reçu aucun contenu)
 $ccccc = "";

 if(isset($ccccc)){
    echo "Cette variable existe <br>";
 }else{
    echo "Cette variable n'existe pas";
 }

 if(empty($ccccc)){
    echo "Cette variable est vide <br>";
 }else{
    echo "Cette variable a un contenu";
 }