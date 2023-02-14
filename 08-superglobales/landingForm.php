<?php if(isset($_POST['bouton2'])): ?>
    <ul>
        <li>Email de l'utilisateur: <?= $_POST['email'] ?> </li>
        <li>Commentaires de l'utilisateur: <?= $_POST['commentaires'] ?> </li>
    </ul>
<?php endif; ?>