<?php

// une fonction utilisateur est codée pour les besoins spécifiques du site (pas prévues dans lezs fonctions prédéfinies)
// celle ci demande un argument, mais ce n'est pas une obligation
function salut($prenom){
    echo "Bonjour $prenom";
}
 salut("Aziz <br>");

//  fonction qui va calculer la TVA d'un HT, pour avoir le prix TTC

// premier calcul, avec un prix fixe de 100 € HT
function calculTva(){
    return 100 * 1.2;
}

echo calculTva() . " € TTC <br>";

// second calcul (avec nom de fonction différent, sinon conflit de noms) avec un argument qui pourra récupérer un prix différent (plus flexible)
function calculTva2($prix){
    return $prix * 1.2 . " € TTC<br>";
}

echo calculTva2(50);
echo calculTva2(200);

// troisième fonction avec taux de TVA aussi en argument pour plus de flexibilité
function calculTva3($prix, $tva){
    return $prix * $tva . " € TTC<br>";
}

echo calculTva3(50, 1.055);

// paer défaut, car c'est le cas le plus fréquent, un tx de TVA de 20% sera appliqué, si un second argument (autre tx de TVA) n'a pas été renseigné ligne 39
function calculTva4($prix, $tva = 1.2){
    return $prix * $tva . " € TTC<br>";
}

echo calculTva4(100);