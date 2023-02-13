<?php

// initialisation de la variable à l'extérieur de la boucle while (valeur de zéro assez commune car le premier élément d'un tableau (les boucles servent souvent a explorer des tableaux) aura pour indice 0)
$i = 0;

// dans la parenthèse de la while, la condition pour que notre while continue de s'exécuter (il faut lui donner une limite, sinon boucle infinie qui va ralentir le navigateur). Ici, notre boucle va s'exécuter tant que $i aura une valeur inférieure ou égale à 5
while($i <= 5){
    // entre les accolades, ce que la boucle doit exécuter (ici, afficher une chaine de caractères, concaténée à la valeur de $i)
    echo "Tour " . $i . " - ";
    // en dessous du code à exécuter, on incrémente la variable $i
    $i++;
}

// tour 0 - tour 1 - etc.... tour 5

echo "<br>";

$i = 0;

while($i <= 5){
    // pour ne pas afficher le dernier tiret après le 5, je cible le moment ou $i aura la valeur de 5 pour lui donner un affichage sans le dernier tiret
    if($i == 5){
        echo "Tour " . $i;
    }else{
        // pour les autres cas de figure, je veux le tiret à la fin qui sert de séparateur
        echo "Tour " . $i . " - ";
    }
    // incrémentation de la boucle à l'extérieur de la condition
    $i++;
}

echo "<br>";

// la do while, très peu utilisée
// différence avec la while: dans le bloc do() ce qu'elle doit exécuter + l'incrémentation (deux par deux dans ce cas pour tester)
// la condition se code tout à la fin, dans la while ligne 40
$i = 0;

do{
    echo "Tour " . $i . " - ";
    $i += 2;
}while($i <= 20);


----------------------------------------------------------------

$i = 0;

while($i <= 5){

    if($i <= 4){
        echo "Tour " . $i . " - ";
    }else{
        echo "Tour " . $i;
    }

    $i++;
}

echo "<br> alors <br>";

$i = 0;

while($i <= 5){
    if($i == 5){
        echo "Tour " . $i;
    }else{
        echo "Tour " . $i . " - ";
    }
    $i++;
}

