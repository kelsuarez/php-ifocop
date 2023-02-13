<?php

if($_GET){
    echo $_GET['produit'] . " au " . $_GET['variete'] . "<br>";
    echo "Vendu au prix de " . $_GET['prix'] . " exeptionnellement aujourd'hui !";
}