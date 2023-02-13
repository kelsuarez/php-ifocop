<?php

//espace global

// function maFonction(){

    // est considéré comme espace local, tout ce qui est codé entre les deux accolades de la fonction (bloc d'instructions)
    // Tout ce qui est codé à l'extérieur est considéré comme espace global
    // il faut utiliser des mots clés pour relier les deux, sinon, ce qui est declaré dans l'un, ne sera pas reconnu dans l'autre

// }

//espace global

// du global vers le local
$pays = "France <br>";

function affichePays(){
    // si le mot clé global n'est pas utilisé pour pointer sur la variable $pays (declarée dans l'espace global, a l'extérieur de la fonction), alors cette variable ne sera pas reconnue ici, elle aura le statut de undifined
    global $pays;
    echo $pays;
}

affichePays();

// du local vers le global

function afficheJour(){
    $jour = "mercredi";
    // pour que la variable $jour soit reconnue dans l'espace global, je dois l'exporter avec le mot return
    return $jour;
}

echo afficheJour();