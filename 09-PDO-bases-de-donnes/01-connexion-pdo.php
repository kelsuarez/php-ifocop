<?php

// pour se connecter a une base de donnes on fait appel à la surcouche de PHP: PDO (PHP DATA OBJECT)
//  PDO est une classe, en orienté objet, on ne peut modifier une clase, c'est pour cela que l'on crée un objet ($pdo) de notre classe PDO
// En orienté objet, on travaille sur l'objet, mais pas sur la classe
// Une fois crée cet objet, on va envoyer dans les parenthèses les parametres pour personnaliser notre objet (a quelle BDD veut on se connecter)
// on est en local, ça sera donc son host
// le dbname attend le nom de la base de données à laquelle se connecter
// root, pour windows ou Mac, sera l'identifiant de l'administrateur de la base de données
// pour le dbpassword, pour windows, il faut laisser le champs vide, pour Mac le remplir avec root
// PDO::ATTR_ERRMODE permet de sélectionner (si on veut, ce n'est pas une obligation) le type d'erreur affichée par le navigateur
// Dernier info (pas obligatoire non plus, quel encodage choisir pour insérer les infos collectées sur le site vers le BDD)
$pdo = new PDO('mysql:host=localhost;dbname=boutique', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

// affichage non conventionnel pour voir les fonctions/méthodes héritées de la classe PDO
echo "<pre>"; print_r((get_class_methods($pdo))); echo "</pre>";