<?php

$premierNombre = 4;
$secondNombre = 2;

// les opérateurs arithmétiques sont utilisés de manière classique (additionner le total d'un panier, mettre à jour le stock d'un produit en BDD en soustrayant la qualité vendue etc...)
echo $premierNombre + $secondNombre . "<br>";
echo $premierNombre - $secondNombre . "<br>";
echo $premierNombre * $secondNombre . "<br>";
echo $premierNombre / $secondNombre . "<br>";

// deux autres opérateurs peut-etre utiles, le modulo (le reste d'une division) et l'exponentiation (4 puissance 2, ligne 15)

echo $premierNombre % $secondNombre . "<br>";
echo $premierNombre ** $secondNombre . "<br>";

// les opérateurs d'affectation +=, -= etc... vont fonctionner comme la concaténation par affectation

// attention, ne pas concaténer avec les <br> sinon bug Warning: A non-numeric value encountered
    //  4               +        2
echo $premierNombre += $secondNombre;
// echo $total = $premierNombre + $secondNombre;
echo "<br>";
        //  6           -     2
echo $premierNombre -= $secondNombre;
echo "<br>";
echo $premierNombre *= $secondNombre;
echo "<br>";
echo $premierNombre /= $secondNombre;
echo "<br>";
