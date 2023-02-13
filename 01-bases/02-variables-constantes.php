<?php

// convention de nommage des variables
// doit obligatoirement débuter par le signe $
// ne peut débuter par un chiffre, sinon erreur php
// par convention, sans générer d'erreur, on ne débute pas le nom par un caractère spécial ( _ / @ etc...), pas d'accents, ou de majuscule
$prenom = "Aziz";

// les doubles quotes interprètent le contenu des variables
echo "Profil de $prenom <br>";
// les simples quotes n'interprètent pas les variables, il faudrait faire de la concaténation
echo 'Profil de $prenom <br>';

// si mot composé, par convention on va utiliser du camelCase ou du snake_case
// camelCase plutot utilisé, par convention pour les variables
$nombreProduits = 5;

// par convention, le snake_case est réservé aux noms de constantes
$nombre_eleves = 15;

// attention, ligne ci dessous va générer une erreur PHP car le nom n'est pas le même qu'a la ligne 19 où elle a été declarée (case sensitive, sensible à la casse)
// echo "Il ya $nb_eleve élèves dans la classe";

// fonction prédéfinie php
echo gettype($prenom) . "<br>";
echo gettype($nombreProduits) . "<br>";

$nombreDecimal = 5.2;
$booleen = TRUE;

// type double
echo gettype($nombreDecimal) . "<br>";
// type boolean
echo gettype($booleen) . "<br>";

// va générer 1 pour TRUE et 0 (ou rien/NULL) pour FALSE
echo $booleen . "<br>";

// les constantes se déclarent avec le mot clé define
// elle prend obligatoirement deux arguments
// le premier, son nom (par convention en majuscules) puis sa valeur
define('VILLE', 'Paris');

// rien de particulier pour afficher la valeur d'une constante
echo VILLE . "<br>";

// impossible d'affecter une autre valeur à une constante déjà declarée au préalable
// define('VILLE', 'Créteil');

// on aura très peu besoin de constantes. Les seuls cas seront pour protéger une info/valeur qui ne doit surtout etre modifiée par mégarde ultérieurement dans le code (URL du site, par exemple)

// il existe des constantes magiques, à notre disposition (voir pdf du cours) qui aident au debuggage (savoir dans quel fichier, a quelle ligne, se situe le bug)

echo __FILE__ . "<br>" ;
echo __LINE__ ;