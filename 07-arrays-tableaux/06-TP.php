Declarer dans un tableau 5 véhicules motorisés (avion, bateau, voiture, moto, hélicoptère)
Afficher la totalité de ses éléments grace à un affichage non-conventionnel (celui qui permet de récupérer les infos les plus précises possibles)
Ajouter un autre véhicule a ce tableau (sous-marin)
Afficher la totalité de ces véhicules grace à une boucle while() (pas for ou foreach)

---------------------------------

Déclarer un second tableau, associatif, 5 animaux (chats, chiens, chevaux, moutons, oiseaux)
Récupérer en affichage conventionnel l'animal moutons
Récupérer tous les animaux grace à une foreach

---------------------------------

Déclarer dans un tableau multi-dimensionnel 5 produits (Chemise, Pantalon, Gilet, Robe, Foulard)
Leur donner à chacun; un prix, une taille, une couleur
Avec une boucle foreach, en concaténant une phrase afficher toutes les informations pour chaque produit

<?php

// DECLARATION DE TABLEAU
$tableauVehiculesMotorises = array(
    'avion',
    'bateau',
    'voiture',
    'moto',
    'helicoptere'
);

// AFFICHER LA TOTALITE
echo "<pre>"; var_dump($tableauVehiculesMotorises); echo "</pre>";

// AJOUTER UN VEHICULE
$tableauVehiculesMotorises[] = 'sous-marin';

// CREATION MA BOUCLE WHILE
$i = 0;
while( $i < 6 ) {
    echo "{$tableauVehiculesMotorises[$i]}" . "<br>";
    $i++;
}

// DECLARATION TABLEAU 2
$tableauAnimaux = array(
    'chats',
    'chiens',
    'chevaux',
    'moutons',
    'oiseaux'
);

// AFFICHER NORMAL MOUTONS
echo "<pre>"; print_r($tableauAnimaux[3]); echo "</pre>";

// FOREACH
foreach($tableauAnimaux as $key => $value){
    echo "<p> Animaux $value <br>";
}

// Déclarer dans un tableau multi-dimensionnel 5 produits (Chemise, Pantalon, Gilet, Robe, Foulard)
// Leur donner à chacun; un prix, une taille, une couleur
// Avec une boucle foreach, en concaténant une phrase afficher toutes les informations pour chaque produit

$tableauProduit = array(
    "Chemise" => array('prix' => '50€', 'taille' => 'xs', 'couleur' => 'vert'),
    "Pantalon" => array('prix' => '40€', 'taille' => 'xxl', 'couleur' => 'marron'),
    "Gilet" => array('prix' => '70€', 'taille' => 's', 'couleur' => 'gris'),
    "Robe" => array('prix' => '60€', 'taille' => 'm', 'couleur' => 'rouge'),
    "Foulard" => array('prix' => '20€', 'taille' => 'xl', 'couleur' => 'jaune'),
);

foreach($tableauProduit as $key => $value){
    echo "<ul display : flex;>";
    // condition qui va vérifier si $value est un tableau (un tableau dans un tableau, car syntaxe différente pour en extraire les infos)
        if(is_array($value)){
            echo "<li>";
            // si oui, j'affiche le nom du personnage dans un li h2
                echo "<h2> $key <h2>";
                // puis une seconde boucle pour extraire les infos dans le second tableau
                    foreach($value as $key2 => $value2){
                        echo "<p> $key2 : $value2 </p>";
                    }
            echo "</li>";
        }
    echo "</ul>";
}