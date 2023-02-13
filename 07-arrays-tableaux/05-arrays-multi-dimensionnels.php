<?php

$marvel_hero = array(
    array('personnage' => 'Iron Man', 'prenom' => 'Tony', 'nom' => 'Stark'),
    array('personnage' => 'Spiderman', 'prenom' => 'Peter', 'nom' => 'Parker'),
    array('personnage' => 'Black Widow', 'prenom' => 'Natasha', 'nom' => 'Romanov')
);
// le var_dump montre des tableaux imbriqués dans un tableau global
echo "<pre>"; var_dump($marvel_hero) ; echo "</pre>";

// pour afficher le prénom de Spiderman
echo $marvel_hero[1]['prenom'];


// seconde syntaxe pour declarer un tableau multu-dimensionnel
// utile pour crocheter encore plus vite et récupérer les valeurs
$marvel_hero2 = array(
    "Iron Man" => array('prenom' => 'Tony', 'Nom' => 'Stark'),
    "Spiderman" => array('prenom' => 'Peter', 'Nom' => 'Parker'),
    "Black Widow" => array('prenom' => 'Natasha', 'Nom' => 'Romanov'),
);

echo "<pre>"; var_dump($marvel_hero2) ; echo "</pre>";
echo $marvel_hero2['Black Widow']['Nom'] . ' connait ' . $marvel_hero2['Spiderman']['prenom'] ;

// boucle qui va fonctionner, en crochetant ensuite à l'indice de $value
foreach($marvel_hero2 as $key => $value){
    echo "<p> Personnage: $key. Son prénom est $value[prenom] et son nom est $value[Nom]";
}

// syntaxe (dans une liste) qui va tester $value (qui est un tableau)

foreach($marvel_hero2 as $key => $value){
    echo "<ul>";
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