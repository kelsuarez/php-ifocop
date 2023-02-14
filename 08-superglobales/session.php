<?php

//  en debut de code pour que la session soit valide 
session_start();

// creation de deux indices dans cette session, un pour collecter le pseudo de la personne qui se connecte
$_SESSION['pseudo'] = "keke";
// le seconde pour connaitre son statut au sen du site
$_SESSION['statut'] = "utilisateur";

?>

<button><a href="profil.php">Vers la page profil</a></button>