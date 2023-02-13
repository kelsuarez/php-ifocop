<?php

$prenom = "Aziz";
$nom = "Tobbal";

// la concaténation est obligatoire pour afficher cote a cote du PHP avec du html (valeur inscrite en dur)
echo 'Mon nom est ' . $nom . ', et mon prénom est ' . $prenom . '<br>';
// on peut concaténer avec une virgule (mais c'est principalement le point qui est utilisé)
echo 'Mon nom est ' , $nom , ', et mon prénom est ' , $prenom , '<br>';

// Pas besoin de concaténer avec des doubles quotes, la variable est interprétée
echo "Mon nom est $nom, et mon prénom est $prenom <br>";

// concaténation par affectation
$debut = "Ile de ";
$fin = "France";

$debut .= $fin;
echo $debut . "<br>";
// attention, la concaténation par affectation va ecraser la valeur d'origine (Ile de ) au profit d'une nouvelle valeur (Ile de France). Il ne faut donc l'utiliser que si on est sur de ne plus avoir besoin de la valeur d'origine