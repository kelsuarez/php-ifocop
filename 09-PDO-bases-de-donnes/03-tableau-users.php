<?php

$pdo = new PDO('mysql:host=localhost;dbname=boutique', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8') );

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage de tous les employés</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <!-- syntaxe W3C, un tableau doit obligatoirement etre declaré entre table ouvrant et table fermant -->
    <table class="table">
        <?php $afficheUsers = $pdo->query("SELECT * FROM membre");?>
        <!--syntaxe W3C, dans le thead, s'afficheront les noms  -->
        <thead>
            <!-- tr permet de déclarer la ligne dasn laquelle vont etre générées toutes les colonnes de la table -->
            <tr>
                <!-- th représente chaque cellule permettant d'afficher le nom de la colonne -->
                <!-- columnCount() va donner la limite à ma boucle. Ma boucle for va générer autant de th qu'il y a de colonnes en BDD pour la table membre -->
                <?php for($i = 0; $i < $afficheUsers->columnCount(); $i++):
                    // getColumnMeta permet de récupérer le nom de chaque colonne de la table
                    // on lui donne en parametre $i, pour le bon nom a chaque tour de la boucle for 
                    $colonne = $afficheUsers->getColumnMeta($i);
                    // print_r pour voir ce que contient $colonne avant de l'utiliser
                    // echo"<pre>"; print_r($colonne); echo "</pre>" ?>
                    <th><?= $colonne['name']?></th>
                <?php endfor;?>
            </tr>
        </thead>
        <!-- tbody va inclure l'affichage de toutes les entrées contenues dans la table en BDD-->
        <tbody>
            <!-- ce tr crée une ligne pour chaque entrée en BDD -->
            <!-- boucle while pour générer autant de lignes qu'il existe d'entrées (d'utilisateurs) enregistrés en BDD -->
            <?php while($user = $afficheUsers->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <!-- td, équivalent de th, mais pour tbody, génére chaque cellule de chaque entrée en BDD -->
                <!-- foreach pour récupérer en afficher les valeurs de chaque cellule de chaque utilisateurs -->
                <?php foreach($user as $indice => $value): ?>
                <td> <?php echo $value ?> </td>
                <?php endforeach; ?>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <table class="table">
        <?php $afficheUsers = $pdo->query("SELECT * FROM produit");?>
        <thead>
            <tr>
                <?php for($i = 0; $i < $afficheUsers->columnCount(); $i++):
                    $colonne = $afficheUsers->getColumnMeta($i); ?>
                    <th><?= $colonne['name']?></th>
                <?php endfor;?>
            </tr>
        </thead>
        <tbody>
            <?php while($user = $afficheUsers->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <?php foreach($user as $indice => $value): ?>
                <td> <?php echo $value ?> </td>
                <?php endforeach; ?>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <table class="table">
        <?php $afficheUsers = $pdo->query("SELECT * FROM commande");?>
        <thead>
            <tr>
                <?php for($i = 0; $i < $afficheUsers->columnCount(); $i++):
                    $colonne = $afficheUsers->getColumnMeta($i); ?>
                    <th><?= $colonne['name']?></th>
                <?php endfor;?>
            </tr>
        </thead>
        <tbody>
            <?php while($user = $afficheUsers->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <?php foreach($user as $indice => $value): ?>
                <td> <?php echo $value ?> </td>
                <?php endforeach; ?>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <table class="table">
        <?php $afficheUsers = $pdo->query("SELECT * FROM details_commande");?>
        <thead>
            <tr>
                <?php for($i = 0; $i < $afficheUsers->columnCount(); $i++):
                    $colonne = $afficheUsers->getColumnMeta($i); ?>
                    <th><?= $colonne['name']?></th>
                <?php endfor;?>
            </tr>
        </thead>
        <tbody>
            <?php while($user = $afficheUsers->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <?php foreach($user as $indice => $value): ?>
                <td> <?php echo $value ?> </td>
                <?php endforeach; ?>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>