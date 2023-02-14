<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Formulaire SAV</title>
        </head>
        <body>
            <!-- Method=POST, est une de deux informations obligatoires a renseigner pour que les infos collectées dans le formulaire puissent etre véhiculées vers une base de données (ou ver une autre page, plus rare) -->
            <form method="POST" action="">
                <label for="email">E-mail</label><br>
                <!-- l'attribut name est l'autre information obligatoire pour que le formulaire puisse envoyer les infos en BDD (il correspond au nom de la colonne de la table en BDD) -->
                <input type="email" id="email" name="email" placeholder="Votre adresse email"><br>

                <label for="commentaires">Commentaires</label><br>
                <textarea name="commentaires" id="commentaires" cols="50" rows="5" placeholder="Faites nous part de vos commentaires" ></textarea><br>

                <input name="bouton1" type="submit" value="Valider le formulaire">
            </form>

            <!-- Récuperation des infos du formulaire ci dessous -->
            <!-- Il faut absolument mettre une condition, sinon, au premier chargement de la page, une erreur undifined key sera affiché. Normal, le formulaire n'a pas encore été rempli. Il faut donc un if pour laisser au user le temps de remplir le formulaire-->
            <!-- Si plusieurs formulaires sur la même page, il faudra donner un nom particulier à chaque bouton, sinon, tous les formulaires se déclencheront en même temps (penser à ajouter un isset dans ce cas la en plus de if, sinon erreur undifined key bouton1) -->
            
            <?php if(isset($_POST['bouton1'])): ?>
            <ul>
                <li>Email de l'utilisateur: <?= $_POST['email'] ?> </li>
                <li>Commentaires de l'utilisateur: <?= $_POST['commentaires'] ?> </li>
            </ul>
            <?php endif; ?>

            <form method="POST" action="landingForm.php">

                <label for="email">E-mail</label><br>
                <input type="email" id="email" name="email" placeholder="Votre adresse email"><br>

                <label for="commentaires">Commentaires</label><br>
                <textarea name="commentaires" id="commentaires" cols="50" rows="5" placeholder="Faites nous part de vos commentaires" ></textarea><br>

                <input name="bouton2" type="submit" value="Valider le formulaire">

            </form>
        </body>
    </html>