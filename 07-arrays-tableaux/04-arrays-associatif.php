<?php

// un tableau associatif est appelé ainsi car il permet d'associer une valeur avec un indice nommé par nos soins

$listeCouleurs = array('j' => 'jaune', 'v' => 'vert', 'r' => 'rouge', 'b' => 'bleu');

// syntaxe pour afficher la couleur rouge, je crochète à l'indice r, que je connais car je le lui ai donné (plus besoin de compter ou de faire un print_r ou var_dump pour le connaitre)
// ici, b ou r etc...pourraient représenter les noms de colonnes plus tard en BDD
// les noms de colonnes, c'est moi qui les donne, ce ne sont pas des indices données progressivement par PHP
echo $listeCouleurs['r'];

// cas particulier de syntaxe pour crocheter à un indice
// avec de simples quotes, au moment de crocheter à l'indice, celui ci sera compris entre quotes
echo '<br>Première couleur: ' . $listeCouleurs['j'] . '<br>';
// par contre, si on utilise des doubles quotes, au moment de crocheter à l'indice, il ne faudra aucun quote, sinon erreur PHP
echo "Seconde couleur: $listeCouleurs[v] <br>";