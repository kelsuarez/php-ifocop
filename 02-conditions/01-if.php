<?php

// les conditions sont indispensables à la création d'un site. Pour se connecter, on aura besoin d'une condition qui ira vérifier en BDD si les infos sont similaires a celle renseignées dans le formulaire de connexion

$a = 22;
$b = 27;
$c = 35;
$d = 48;
$e = 55;

if($a > $b){
    echo "Vrai, a est bien supérieur à b";
}else{
    echo "Faux, a est inférieur à b <br>";
}

// Le else n'est pas obligatoire si on n'a pas besoin de son résultat

// le && (AND) nécessite que les deux conditions soient vérifiées pour tomber dans le TRUE, sinon, c'est le else (FALSE)
if($a < $b && $b > $c){
    echo "Vrai, les deux conditions sont vérifiées";
}else{
    echo "Faux, seulement une des deux est vérifiée <br>";
}

// le ||(OR) demande une seule condition vérifiées
if($b < $c || $d > $e){
    echo "Vrai, au moins une des deux conditions est vérifiée <br>";
}else{
    echo "Faux, aucune condition n'est vérifiée";
}

// XOR (ou exclusif) demande a ce que seulement une seule condition soient vérifiées, au delà, on tombe dans le else FALSE
if($a == 22 XOR $b == 27){
    echo "Vrai, les deux conditions sont vérifiées";
}else{
    echo "Faux, trop de conditions sont vérifiées <br>";
}

// différence entre le double = et le triple =
$a = 2;
$b = "2";

// le == compare les valeurs
if($a == $b){
    echo "Vrai, ils ont les mêmes valeurs <br>";
}else{
    echo "Faux, leurs valeurs sont différentes";
}

// le === compare les valeurs, mais aussi les types (différentes dans ce cas)
if($a === $b){
    echo "Vrai, ils ont les mêmes valeurs";
}else{
    echo "Faux, leurs types sont différentes <br>";
}

// comparatif syntaxe classique et ternaire
if($d < $e){
    echo "Vrai, c'est vérifié <br>";
}else{
    echo "Faux";
}
// son équivalente en ternaire
// la condition est mise entre parenthèse. le TRUE est  symbolisé par ? et le else FALSE par :
echo ($d < $e) ? "Vrai, c'est vérifié <br>" : "Faux";

// fonction prédéfinie isset (pour vérifier si une variable existe)
// utile pour ne pas générer un message d'erreur au premier chargement d'une page avec un formulaire ou une page avec différents affichages

if(isset($test)){
    echo "Vrai, la variable a déjà été declarée";
}else{
    echo "Faux, elle n'existe pas";
}