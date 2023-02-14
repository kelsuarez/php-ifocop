<?php

session_start();

?>

<?php if(isset($_SESSION)): ?>
<h1>Profil de <?= $_SESSION['pseudo'] ?></h1>
<!-- <p>Vous avez le statut de  <?= $_SESSION['statut'] ?></p> -->
    <!-- pour quel affichage appliqué selon que l'on a le statut d'admin ou utilisateur, on teste la valeur contenue dans la sessions dans une condition ($_SESSION['statut'] == 'admin') -->
    <?php if($_SESSION['statut'] == "0"): ?>
        <p>Bienvenue, vous avez le statut <?= $_SESSION['statut'] ?> sur le site</p>
    <?php else:?>
        <p>Vous avez le statut d' <?= $_SESSION['statut'] ?></p>
    <?php endif; ?>
<?php endif; ?>