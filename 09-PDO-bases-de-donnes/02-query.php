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