<?php

$pdo = new PDO('mysql:host=localhost;dbname=boutique', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));
// traitement PHP pour sécuriser l'envoi de données en BDD (car les protections en Front (pattern etc...) sont très facilement contournables pour un hacker (F12 inspecteur))

// la protection du formulaire devra etre codée dans un if($_POST) pour ne pas générer    d'erreur PHP au premier chargement de la page
$erreur = "";

if($_POST){

    // cette contrainte correspond au champs pseudo
    // on vérifie si l'indice n'existe pas
    // puis on vérifie si il respecte le preg_match
    // si une seule de ces conditions n'est pas respectée ( OR ||), alors on génère un message d'erreur que l'on affecte à la variable $erreur

    if(!isset($_POST['pseudo']) || !preg_match('#^[a-zA-Z0-9-_.]{3,20}$#', $_POST['pseudo'])){
        $erreur .= "<p>Les caractères acceptés sont les majuscules et minuscule de l'alphabet. Les chiffres de 0 à 9. Les seuls caractères spéciaux acceptés sont - _ . . Votre pseudo devra comporter au minimum 3 caractères sans excéder 20</p>";
    }

    // cette contrainte correspond au champs email
    // on vérifie si l'indice n'existe pas
    // puis on vérifie si il respecte le ce que demande filter_var
    // si une seule de ces conditions n'est pas respectée ( OR ||), alors on génère un message d'erreur que l'on affecte à la variable $erreur

    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $erreur .= "<p>Erreur format email.<br> Ce que vous avez indiqué ne correspond pas à une adresse mail valide</p>";
    }

    // cette contrainte correspond au champs mdp
    // on vérifie si l'indice n'existe pas
    // puis on vérifie avec strlen que le mdp doit etre compris entre 3 et 20 caractères, sinon, on génère un message d'erreur

    if(!isset($_POST['mdp']) || strlen($_POST['mdp']) <3 || strlen($_POST['mdp']) > 20){
        $erreur .= "<p>Erreur format mot de passe.<br> Il ne doitpas etre inférieur à trois caractères et ne peut en contenir plus de 20</p>";
    }

    if(empty($erreur)){
        // la requete préparée s'impose pour des raisons de sécurité lorsque on doit modifier une BDD (Insertion, Modification ou Suppression). La requete query peut encore utilisée pour sélectionner des éléments en BDD (mais pas pourle Select, Update ou Delete)
        $inscrireUser = $pdo->prepare(" INSERT INTO membre (pseudo, email, mdp) VALUES (:pseudo, :email, :mdp) ");
        // la requete préparée est plus longue à mettre en place que la requete query (voir son équivalent un peu en dessous, commentée), mais elle est necessaire pour apporter plus de sécurité lors de l'envoi en BDD
        // la requete préparée necessite de declarer un bindValue (ou variation avec bindParam) pour chaque input
        // ce bindValue demande un pointeur nommé (:pseudo, ou :email etc...) pour lui donner son équivalent extrait du formulaire ($_POST[pseudo] ou $_POST[email]) pour envoyer la donnée dans la bonne colonne en BDD
        // en dernier, bindValue demande un PARAM typé (STR, INT) pour n'envoyer en BDD que la donnée qui à le bon type (pour un code postal, un nombre entier, pour un pseudo, une chaine de caractères etc...)
        // si le type envoyé ne correspond pas a ce qui est attendu en BDD, la procédure d'envoi est annulée (mesure de protection pas possible avec query)
        $inscrireUser->bindValue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
        $inscrireUser->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
        $inscrireUser->bindValue(':mdp', $_POST['mdp'], PDO::PARAM_STR);
        // en dernier, la requete préparée doit etre exécutée, obligatoirement
        $inscrireUser->execute();

        // $inscrireUser2 = $pdo->query(" INSERT INTO membre (pseudo, email, mdp) VALUES ($_POST[pseudo], $_POST[email],  $_POST[mdp]) ");
    }

}
?>
<!--  -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?= $erreur ?>
    <form method="POST" action="">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo" maxlength="20"><br><br>
        <!-- pattern="[a-zA-Z0-9-_.]{3,20}" title="Les caractères acceptés sont les majuscules et minuscule de l'alphabet. Les chiffres de 0 à 9. Les seuls caractères spéciaux acceptés sont - _ . . Votre pseudo devra comporter au minimum 3 caractères sans excéder 20" -->
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Votre adresse mail"><br><br>

        <label for="mdp">Mot de passe</label><br>
        <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe"><br><br>

        <input type="submit">
    </form>
</body>
</html>