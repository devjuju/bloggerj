<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
<h1>Le super blog Bind de l'AVBN !</h1>
<p>Une erreur est survenue : <?= $errorException ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
