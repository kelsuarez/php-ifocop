<?php
$pdo = new PDO('mysql:host=localhost;dbname=securite', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'));

if($_POST){
    // cette requete va cibler toutes les entrées qui auront un pseudo similaire à celui inséré dans le formulaire ET , un mot de passe similaire
    $rechercheUser = $pdo->query("SELECT * FROM user WHERE pseudo = '$_POST[pseudo]' AND mdp = '$_POST[mdp]' ");
    $user = $rechercheUser->fetch(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <h1 class="my-5 text-center">Formulaire de connexion</h1>

    <form method="POST" action="" class="py-5 ms-5">
        
            <div class="col-3 mb-3">
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Votre pseudo">
            </div>
            <div class="col-3 mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="text" name="mdp" class="form-control" id="mdp" placeholder="Votre mot de passe">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        
    </form>

    <h2 class="my-5 text-primary">Vos informations de connexion</h2>

    <!-- première condition, pour éviter l'erreur PHP au premier chargement de la page -->
    <?php if($_POST): ?>

            <!-- deuxième condition, qui va afficher un message si le user à réussi a se connecter -->
            <?php if(): ?>

            <!-- et un autre message si la connexion a échoué -->
            <?php else: ?>
            <?php endif; ?>

    <?php endif; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>