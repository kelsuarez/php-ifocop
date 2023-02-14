<?php
// les sessions servent à conserver des information "temporaires" qui ne nécessitent pas d'etre inscrites en base de données (pour ne pas la surcharger).
// par exemple, les produits dans un panier n'ont pas a etre inscrits en bdd dans une table panier, car on ne sait pas si la personne les achètera au final. Par contre, après validation du panier, les  infos seront gravées e, BDD dans une table nommée commande
// pour un utilisateur connecté, idem, pas besoin de stocker les infos le concernant, on ouvrira un session utilisateur le temps de connexion

//  a coder obligatoirement en haut de fichier, avant tout code, pour créer une session (panier, utilisateur etc...)

session_start();

?>
<button><a href="session.php" target="_blank">Vers fichier session</a></button>