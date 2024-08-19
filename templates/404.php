<?php $title = "Erreur 404"; ?>

<?php ob_start(); ?>
<h2> Erreur 404</h2>
<p><?= $errorMessage ?></p>
<a href="index.php?action=home" role="button">Allez à l'accueil</a>

<?php $content = ob_get_clean(); ?>

<?php require('../templates/gabarit.php') ?>
