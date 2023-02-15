<?php
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


}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method="POST" action="">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo" maxlength="20" pattern="[a-zA-Z0-9-_.]{3,20}" title="Les caractères acceptés sont les majuscules et minuscule de l'alphabet. Les chiffres de 0 à 9. Les seuls caractères spéciaux acceptés sont - _ . . Votre pseudo devra comporter au minimum 3 caractères sans excéder 20"><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" placeholder="Votre adresse mail"><br><br>

        <label for="mdp">Mot de passe</label><br>
        <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe"><br><br>

        <input type="submit">
    </form>
</body>
</html>