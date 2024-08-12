<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
<h1>Le super blog Bind de l'AVBN !</h1>
<h2> Erreur 404</h2>
<p>Page introuvable</p>
<p>Vous pouvez aller sur la page d'accueil du blog en cliquant sur le bouton ci-dessous</p>
<a href="index.php?action=home" role="button">Allez à l'accueil</a>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
