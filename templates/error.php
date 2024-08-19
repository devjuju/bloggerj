<?php $title = "Erreur"; ?>

<?php ob_start();

?>
<section class="container-fluid p-5 bg-light-subtle w-100">
 
  <div class="container pb-4 mt-n1 mt-lg-0 text-center">
  <img src="images/bloggerj-erreur-img.svg" class="img-fluid featured-image-post" width="500" alt="image">
  <div class="spacing-content-padding-top-40">
  <h1 class="titre-page">Une erreur est survenue !</h1>
    <p><?= $errorMessage ?></p>
  </div>
    
  

  </div>
</section>




<?php $content = ob_get_clean(); ?>

<?php require('../templates/gabarit.php') ?>
