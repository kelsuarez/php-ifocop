<?php

// autre boucle, la for, avec une syntaxe différente de la while, mais exécutant les mêmes 

// initialisation, condition et incrémentation se declarent dans le parenthèses de la for, puis dans les accolades, le code à exécuter tant que la boucle est valide
for($i = 0; $i <= 10; $i++){
    echo "Tour numéro $i<br>";
}

?>
<br><br>
<!-- selecteur pour partir de 2023 -->
<form action="">
    <select name="" id="">
        <option value="">Sélectionnez l'année</option>
        <?php for($annee= date('Y'); $annee >= date('Y') - 100 ; $annee--){ ?>
        <option value="<?= $annee ?>"><?= $annee ?></option>
        <?php } ?>
    </select>
</form>

<br><br>

<!-- selecteur pour démarrer en 1923 -->
<form action="">
    <select name="" id="">
        <option value="">Sélectionnez l'année</option>
        <?php for($annee = 1923; $annee <= date('Y') ; $annee++){ 
        echo '<option>' . $annee . '</option>';
         } ?>
    </select>
</form>

<!-- tableau qui va afficher sur une ligne les chiffres de 1 à 10 -->
<table border='1' style="border-collapse: collapse; font-size: 1.8rem">
    <?php for($j = 0; $j <= 9; $j++) : ?>
        <tr>
            <?php for($i = 0; $i <= 9; $i++) : ?>
                <td><?= (10*$j+$i) + 1 ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<!-- tableau pour générer 10 lignes avec 10 cellules chacunes pour afficher les chiffres de 1 à 100 (double for) --> 