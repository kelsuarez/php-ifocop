<?php

// pour coder dans un fichier il faut obligatoirement ouvrir un passage php (voir plus haut)

// deux manières pour faire de l'affichage conventionnell en php echo ou print
echo "Je suis dans les locaux de Ifocop Paris";
echo "<br>";
// le plus utilisé est echo, en plus d'etre plus performant que print
print "Je m'affiche grace à print <br>";

// pour un commentaire sur une seule ligne

/* pour un commentaire
sur plusieurs lignes
*/

?>

<?=
// = remplace php + echo, utile si on ne veut qu'afficher un contenu sans avoir a exécuter une boucle, fonction ou autre
 "Je suis dans un autre passage php" ?>
<!-- je ferme mon passage php si en dessous je dois injecter du code html ou autre -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo "<h1>"
?>
    
</body>
</html>

<?php

// je peux réouvrir si besoin plusieurs autres passages php
// si je n'ai plus de code html ern dessous, je ne ferme pas le passage php, cela sera plus facile à debugguer