<?php

$pdo = new PDO('mysql:host=localhost;dbname=boutique', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

// requete pour cibler (grace à la methode Query) un utilisateur en BDD, le résultat sera stocké dans la variable $afficheUser
$afficheUser = $pdo->query("SELECT * FROM membre WHERE prenom = 'Natasha' ;");

// affichage non conv de la requete
echo "<pre>"; var_dump($afficheUser); echo "</pre>";

// pour pouvoir afficher les infos concernant cet utilisateur en particulier, je vais mdevoir utiliser la méthode fetch (qui appartient aussi à PDO). Ce résultat sera stocké dans la variable $user
// FETCH_ASSOC permet une recherche sur le nom de la colonne (FETCH8NUM, sur l'indice de la colonne et FETCH_BOTH sur le nom et l'indice de la colonne)
$user = $afficheUser->fetch(PDO::FETCH_ASSOC);

echo "<pre>"; var_dump($user); echo "</pre>";

// pour afficher de manière conventionnel le résultat, j'utilise mon tableau $user, puis je cible le nom de la colonne dont je veux le résultat (je crochète à la bonne colonne)

echo "<p>L'utilisatrice $user[pseudo], habite dans la ville de $user[ville] à l'adresse $user[adresse]</p>";


foreach ($user as $indice => $value) {
    if ($indice != 'mdp') {
        echo $indice . ': ' . $value . '<br>';
    }
}


for($i = 0; $i <= ; $i++){
    echo "Tour numero" . $i . "<br>";
}


// C:\wamp64\www\php-ifocop\09-PDO-bases-de-donnes\02-query.php:15:
//     array (size=11)
//       'id_membre' => string '4' (length=1)
//       'pseudo' => string 'Black_Widow' (length=11)
//       'mdp' => string '$2y$10$BVHDnVn4vmcggZsXBwR46OmNdZ0jZjoKAw10VfTzTR8Nh3gaEMHBK' (length=60)
//       'nom' => string 'Romanoff' (length=8)
//       'prenom' => string 'Natasha' (length=7)
//       'email' => string 'blackwidow@gmail.com' (length=20)
//       'civilite' => string 'femme' (length=5)
//       'ville' => string 'Paris' (length=5)
//       'code_postal' => string '75015' (length=5)
//       'adresse' => string '85 Impasse du rien' (length=18)
//       'statut' => string '0' (length=1)