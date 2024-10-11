<?php $title = "Post"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="container-fluid p-5 bg-light-subtle">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=blog">Blog</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Exemple de page de post</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1 class="titre-page">Exemple de page de post</h1>
    <div class="d-flex flex-row bd-highlight mb-3 spacing-content-marging-top-40">
      <div class="meta-list-blog bd-highlight">
        <i class="bi bi-person-fill fs-base me-1"></i>
        <span class="fs-sm">Auteur</span>
      </div>
      <div class="meta-list-blog bd-highlight">
        <i class="bi bi-clock-fill fs-base me-1"></i>
        <span class="fs-sm">Sep 16, 2023</span>
      </div>
    </div>

  </div>
</section>



<section class="container py-5 my-1 my-md-4 my-lg-5">
  <div class="row">
    <div class="col-lg-7  mb-lg-0">
      <img src="images/StockSnap_Q3N39D0OEJ.webp" class="img-fluid featured-image-post" alt="image">

      <div class="content-post-blog spacing-content-padding-top-40">
        <h2 class="titre-h4">A propos du projet</h2>
        <p class="highlighted-text">
          Intégrez un thème Wordpress pour un client
        </p>
        <p class="running-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

      </div>






      <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3  spacing-content-padding-top-40">
        <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
          <div class="fs-xs  pe-2 me-2 mb-2">
            <h5 class="titre-h6">Catégorie:</h5>
          </div>
          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="bd-highlight">

              <span class="fs-sm text-primary text-bold">Développement Web </span>
            </div>
          </div>

        </div>
        <div class="d-flex align-items-center position-relative ps-md-3  mb-2">
          <h5 class="titre-h6 me-3">Partager avec :</h5>
          <div class="d-flex">

            <!-- Facebook -->
            <a href="#" class="btn btn-icon-secondary btn-facebook" aria-label="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <!-- Twitter -->
            <a href="#" class="btn btn-icon-secondary btn-twitter" aria-label="Twitter">
              <i class="bi bi-twitter"></i>
            </a>
            <!-- Instagram -->
            <a href="#" class="btn btn-icon-secondary btn-instagram" aria-label="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>
      </div>









      <hr class="separateur-page-blog">






      <div class="bloc-comments mt-5">
        <div class="d-md-flex align-items-center justify-content-between text-center text-md-start pb-1 pb-lg-0 mb-4 mb-lg-5 mt-5">
          <h3 class="titre-h4 mb-md-0">Commentaires</h3>

        </div>


        <!-- Comment -->
        <div class="py-4">
          <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
            <div class="d-flex align-items-center me-3">
              <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
              <div class="ps-3">
                <h6 class="titre-h6 mb-0">Esther Howard</h6>
                <span class="running-text fs-sm text-muted">4 mins ago</span>
              </div>
            </div>

          </div>
          <p class="running-text mb-0">Nibh enim porta ut augue felis, donec sit luctus. Quis ullamcorper dolor sit mauris. Hendrerit eu libero, eu tristique sodales ultrices etiam adipiscing. Donec viverra sodales arcu gravida nibh at. Neque lobortis quis porta integer et placerat lectus scelerisque. Velit eget malesuada morbi faucibus at sed euismod. Tortor, eu ut id tincidunt leo placerat luctus.</p>
        </div>

        <hr class="my-2">





        <!-- Comment -->
        <div class="py-4">
          <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
            <div class="d-flex align-items-center me-3">
              <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
              <div class="ps-3">
                <h6 class="titre-h6 mb-0">Cameron Williamson</h6>
                <span class="running-text fs-sm text-muted">March 24 at 8:20</span>
              </div>
            </div>

          </div>
          <p class="running-text mb-0">Mattis id ut sed arcu metus elit faucibus condimentum aliquam. Nam adipiscing diam et suspendisse. Sagittis massa maecenas laoreet nulla amet nunc sagittis, pulvinar neque. Duis imperdiet ipsum suspendisse massa lectus habitasse. Id ante volutpat hendrerit augue parturient eget. Ac vitae posuere leo morbi vitae at hac lectus. Nibh neque quam quis amet mattis sit. Faucibus risus at sit tempus ut.</p>
        </div>

      </div>
      <?php
      $session = &$_SESSION;
      if (isset($session['auth']['role'])) {
      ?>

        <?php if ($session['auth']['role'] === 'administrateur') { ?>
          <div class="card-shadow py-3 p-sm-4 p-md-5">
            <div class="card-header">
              <h3 class="titre-h4">
                Laisser un commentaire</h3>

            </div>

            <div class="card-body">

              <div class="d-flex align-items-center me-3">
                <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
                <div class="ps-3">
                  <h6 class="titre-h6 mb-0">Cameron Williamson</h6>
                  <span class="running-text fs-sm text-muted">March 24 at 8:20</span>
                </div>
              </div>


              <form method="post" class="needs-validation" novalidate>
                <div class="row g-4">

                  <!--begin::Form group-->
                  <div class="col-sm-12 form-group-style">
                    <label class="form-label fs-base" for="message"></label>
                    <textarea rows="6" placeholder="Taper votre commentaire ici..." name="contact[message]" id="message"></textarea>

                  </div>
                  <div class="col-sm-12 pt-4">
                    <button type="submit" class="btn btn-primary">
                      Publier un commentaire</button>

                  </div>
                </div>
              </form>







































            </div>
          </div>
        <?php } else { ?>
          <div class="card-shadow py-3 p-sm-4 p-md-5">
            <div class="card-header">
              <h3 class="titre-h4">
                Laisser un commentaire</h3>

            </div>

            <div class="card-body">

              <div class="d-flex align-items-center me-3">
                <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
                <div class="ps-3">
                  <h6 class="titre-h6 mb-0">Cameron Williamson</h6>
                  <span class="running-text fs-sm text-muted">March 24 at 8:20</span>
                </div>
              </div>


              <form method="post" class="needs-validation" novalidate>
                <div class="row g-4">

                  <!--begin::Form group-->
                  <div class="col-sm-12 form-group-style">
                    <label class="form-label fs-base" for="message"></label>
                    <textarea rows="6" placeholder="Taper votre commentaire ici..." name="contact[message]" id="message"></textarea>

                  </div>
                  <div class="col-sm-12 pt-4">
                    <button type="submit" class="btn btn-primary">
                      Publier un commentaire</button>

                  </div>
                </div>
              </form>
            </div>
          </div>
        <?php } ?>

      <?php } else { ?>
        <div class="text-center">

          <a href="index.php?action=login" class="btn btn-outline-primary">
            <i class="bi bi-chat-square-dots fs-xl "></i>
            Ajouter un commentaire
          </a>

        </div>
      <?php } ?>


    </div>
    <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
      <?php
      $session = &$_SESSION;
      if (isset($session['auth']['role'])) {
      ?>

        <?php if ($session['auth']['role'] === 'administrateur') { ?>
          <!-- Basic card example -->
          <div class="card card-background">
            <div class="card-body">
              <div class="text-center">
                <h4 class="titre-h4">Modifier l’article</h4>
                <div class="d-flex justify-content-center bd-highlight mb-3">
                  <div class="meta-content-post bd-highlight">
                    <i class="bi bi-person-fill fs-base me-1"></i>
                    <span class="fs-sm">Auteur</span>
                  </div>
                  <div class="meta-content-post bd-highlight">
                    <i class="bi bi-clock-fill fs-base me-1"></i>
                    <span class="fs-sm">Sep 16, 2023</span>
                  </div>



                </div>

              </div>


              <div class="d-grid gap-2">

                <a href="index.php?action=updatepost" class="btn btn-outline-primary mb-3">
                  Modifier l'article
                </a>
                <button type="submit" class="btn btn-primary">Supprimer l'article</button>
              </div>

            </div>
          </div>
        <?php } else { ?>



        <?php } ?>



      <?php } else { ?>

      <?php } ?>
      <div class="card card-shadow mb-5">
        <div class="card-body">
          <h4 class="titre-h4">Articles liés</h4>
          <ul class="list-unstyled mb-0">
            <li class="pb-3 mb-3">
              <a href="#" class="blog-postlist-content">

                <span class="blog-postlist-title">7 Steps in Mapping Out </span>
                <p class="blog-postlist-intro">
                  7 Steps in Mapping Out an Effective Social Media Strategy
                </p>
                <div class="meta-lists"><span class="meta-date"><i aria-hidden="true" class="bi bi-clock-fill"></i> August 24, 2023</span> </div>

              </a>
            </li>
            <li class="pb-3 mb-3">
              <a href="#" class="blog-postlist-content">

                <span class="blog-postlist-title">7 Steps in Mapping Out </span>
                <p class="blog-postlist-intro">
                  7 Steps in Mapping Out an Effective Social Media Strategy
                </p>
                <div class="meta-lists"><span class="meta-date"><i aria-hidden="true" class="bi bi-clock-fill"></i> August 24, 2023</span> </div>

              </a>
            </li>

          </ul>
          <a href="index.php?action=blog" class="d-grid gap-2 btn btn-outline-primary">
            Voir tout
          </a>



        </div>
      </div>





      <!-- Basic card example -->
      <div class="card card-background">
        <div class="card-body">
          <h4 class="titre-h4">Votre avis compte !</h4>
          <p class="running-text pb-4 mb-0 mb-lg-3">Les utilisateurs ont la possibilité de commenter mon blog. Donner un avis utile qui contribue à l'amélioration du contenu du blog.</p>
          <?php
          $session = &$_SESSION;
          if (isset($session['auth']['role'])) {
          ?>

            <?php if ($session['auth']['role'] === 'admin') { ?>
              <a href="index.php?action=account" class="d-grid gap-2 btn btn-primary spacing-element-marging-bottom-20"">Mon compte</a>
            <?php } else { ?>
              <a href=" index.php?action=account" class="d-grid gap-2 btn btn-primary spacing-element-marging-bottom-20"">Mon compte</a>


            <?php } ?>

            <a href=" index.php?action=logout" class="d-grid gap-2 btn btn-outline-primary spacing-element-marging-bottom-20"">Se déconnecter</a>

            <?php } else { ?>
              <a href=" index.php?action=register" class="d-grid gap-2 btn btn-primary spacing-element-marging-bottom-20">
                S'inscire
              </a>
              <a href="index.php?action=login" class="d-grid gap-2 btn btn-outline-primary">
                Se connecter
              </a>
            <?php } ?>
        </div>
      </div>













    </div>
  </div>
</section>










<?php $content = ob_get_clean(); ?>
<?php require('../templates/gabarit.php') ?>