<?php $title = "Commentaires"; ?>
<?php ob_start();
?>

<aside>
  <div id="docsNav" class="offcanvas-aside offcanvas-lg offcanvas-start d-flex flex-column position-fixed top-0 start-0 vh-100 bg-dark border-end-lg">
    <div class="offcanvas-header d-none d-lg-flex justify-content-start">
      <a href="index.php?action=dashboard" class="navbar-brand d-none d-lg-flex py-0">
        <img src="images/logo-negatif.png" class="img-fluid" alt="Blogger">
        <span>blogger J</span>
      </a>
    </div>
    <div class="offcanvas-header d-block d-lg-none border-bottom">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h5 class="d-lg-none mb-0">Menu</h5>
        <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#docsNav" aria-label="Close"></button>
      </div>
      <div class="list-group list-group-flush mx-n4">
        <a href="index.php?action=dashboard" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4 active">
          <i class="bi bi-speedometer2 fs-lg  me-2"></i>
          Tableau de bord
        </a>
        <a href="index.php?action=home" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4">
          <i class="bi bi-display fs-lg  me-2"></i>
          Le blog
        </a>
      </div>
    </div>
    <div class="offcanvas-body p-4">
      <div class="swiper-wrapper">
        <div class="swiper-slide h-auto spacing-col-padding-top-100">
          <div class="d-table position-relative mx-auto avatar-offcanvas">
            <img src="images/avatar.png" class="d-block rounded-circle" width="120" alt="John Doe">
          </div>
          <div class="profil-offcanvas">
            <h5>Isabella Bocouse</h5>
            <p>bocouse@example.com</p>
          </div>
          <!-- Flush list group -->
          <div class="list-group list-group-flush">
            <a href="index.php?action=posts" class="list-group-item list-group-item-action d-flex align-items-center">
              <div class="box-icon-account">
                <i class="bi bi-pin-fill"></i>
              </div>

              Articles
            </a>

            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
              <div class="box-icon-account">
                <i class="bi bi-chat-square-dots-fill"></i>
              </div>

              Commentaires
            </a>
            <a href="index.php?action=users" class="list-group-item list-group-item-action d-flex align-items-center ">
              <div class="box-icon-account">
                <i class="bi bi-person-fill"></i>
              </div>

              Utilisateurs
            </a>

          </div>




        </div>
      </div>
      <div class="swiper-scrollbar end-0">
      </div>
    </div>
    <div class="offcanvas-header border-top">
      <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary w-100" target="_blank" rel="noopener">
        <i class="bi bi-arrow-right me-2"></i>
        Se déconnecter
      </a>
    </div>
  </div>
</aside>

<main>

  <section class="container-fluid p-5 bg-light-subtle">
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
      <ol class="breadcrumb pt-lg-3 mb-0">
        <li class="breadcrumb-item">
          <a class="breadcrumb-links" href="index.php?action=admin"><i class="bi bi-speedometer2 fs-lg me-1"></i>Tableau de bord</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Commentaires</li>
      </ol>
    </nav>
    <div class="container pb-4 mt-n1 mt-lg-0">
      <h1 class="title-dasboard">Les commentaires</h1>
    </div>
  </section>


  <section class="container-fluid p-5 ">

    <div class="container spacing-col-padding-top-100 spacing-col-padding-bottom-100">

      <div class="row gy-4">

        <!-- Content -->

        <div class="col-lg-7">

          <div class="py-4">

            <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3  spacing-content-padding-top-40">
              <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
                <div class="d-flex align-items-center me-3">
                  <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
                  <div class="ps-3">
                    <h6 class="titre-h6 mb-0">Esther Howard</h6>
                    <span class="running-text">Membre de BloggerJ</span>
                  </div>
                </div>

              </div>
              <div class="d-flex align-items-center position-relative ps-md-3  mb-2">

                <div class="d-flex">

                  <!-- Aperçu -->
                  <a href="index.php?action=blog" class="btn btn-primary spacing-element-marging-right-10 disabled">
                    Commentaire validé

                  </a>



                  <!-- Supprimer -->
                  <a href="#" class="btn btn-icon-circle-secondary">
                    <i class="bi bi-trash3-fill"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card card-comment mb-3">
              <div class="row g-0">
                <div class="col-md-3">
                  <img src="images/article-img-vignette-chalets-et-caviar.png" class="img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="d-flex flex-row bd-highlight mb-3">
                      <div class="meta-comment bd-highlight">
                        <i class="bi bi-chat-square-dots-fill fs-base me-1"></i>
                        <a href="index.php?action=register" class="color-link-primary">Chalets et caviar</a>

                      </div>
                      <div class="meta-comment bd-highlight ">
                        <i class="bi bi-clock-fill fs-base me-1"></i>
                        <span class="fs-sm">Publié le:</span>

                      </div>

                    </div>
                    <p class="running-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                  </div>
                </div>
              </div>
            </div>



          </div>
          <div class="py-4">

            <div class="d-flex flex-md-row flex-column align-items-md-center justify-content-md-between mb-3  spacing-content-padding-top-40">
              <div class="d-flex align-items-center flex-wrap text-muted mb-md-0 mb-4">
                <div class="d-flex align-items-center me-3">
                  <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
                  <div class="ps-3">
                    <h6 class="titre-h6 mb-0">Esther Howard</h6>
                    <span class="running-text">Membre de BloggerJ</span>
                  </div>
                </div>

              </div>
              <div class="d-flex align-items-center position-relative ps-md-3  mb-2">

                <div class="d-flex">

                  <!-- Aperçu -->
                  <a href="index.php?action=blog" class="btn btn-outline-primary spacing-element-marging-right-10">
                    Valider le commentaire

                  </a>


                  <!-- Supprimer -->
                  <a href="#" class="btn btn-icon-circle-secondary">
                    <i class="bi bi-trash3-fill"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card card-comment mb-3">
              <div class="row g-0">
                <div class="col-md-3">
                  <img src="images/article-img-vignette-chalets-et-caviar.png" class="img-fluid " alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="d-flex flex-row bd-highlight mb-3">
                      <div class="meta-comment bd-highlight">
                        <i class="bi bi-chat-square-dots-fill fs-base me-1"></i>
                        <a href="index.php?action=register" class="color-link-primary">Chalets et caviar</a>

                      </div>
                      <div class="meta-comment bd-highlight ">
                        <i class="bi bi-clock-fill fs-base me-1"></i>
                        <span class="fs-sm">Publié le:</span>

                      </div>

                    </div>
                    <p class="running-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                  </div>
                </div>
              </div>
            </div>



          </div>
        </div>

        <!-- Sharing -->
        <div class="col-lg-5 position-relative">
          <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 105px !important;">
            <div class="card card-light-shadow mb-5">
              <div class="card-body pb-0">
                <div class="d-table flex-shrink-0 icon-box">
                  <i class="bi bi-chat-square"></i>
                </div>
                <h3 class="titre-h5 mt-0">Commentaires</h3>
                <p class="running-text">Supprimer ou valider les commentaires de vos utilisateurs</p>
              </div>
            </div>
            <!-- Basic card example -->
            <div class="card card-background">
              <div class="card-body">
                <h4 class="titre-h4">Infos</h4>
                <p class="running-text pb-4 mb-0 mb-lg-3">Seuls les utilisateurs ont la possibilité de commenter le blog.
                </p>
                <a href="index.php?action=blog" class="d-grid gap-2 btn btn-outline-primary mb-3">
                  Voir le blog en direct
                </a>

                <a href="index.php?action=users" class="d-grid gap-2 btn btn-primary">
                  Voir les utilisateurs
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>




















    </div>



  </section>




</main>












<?php $content = ob_get_clean(); ?>
<?php require('../templates/layout.php') ?>