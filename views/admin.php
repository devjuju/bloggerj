<?php $title = "Admin"; ?>
<?php ob_start();
?>

<header class="header navbar navbar-expand navbar-backend" data-scroll-header="">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <a href="getting-started.html" class="navbar-brand flex-shrink-0 py-1 py-lg-2">
		    <img src="images/logo.png" alt="Blogger">
        <span>blogger J</span>
      </a>
    </div>
    <div class="d-flex align-items-center w-100">
      <ul class="navbar-nav d-none d-lg-flex">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="bi bi-speedometer2 opacity-70 fs-lg me-2"></i>
            Tableau de bord
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?action=home" class="nav-link">
              <i class="bi bi-display opacity-70 fs-lg me-2"></i>
              Le blog en direct
          </a>
        </li>
      </ul>
      <button type="button" class="navbar-toggler d-block d-lg-none ms-auto me-4" data-bs-toggle="offcanvas" data-bs-target="#docsNav" aria-controls="docsNav" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="pe-lg-1 ms-lg-auto">    
        <a href="https://themes.getbootstrap.com/product/silicon-business-technology-template-ui-kit/" class="btn btn-primary btn-sm fs-sm rounded ms-4 d-none d-lg-inline-flex" target="_blank" rel="noopener">
          <i class="bi bi-arrow-right me-2"></i>
          Se déconnecter
        </a>
      </div>  
    </div>
  </div>
</header>

<aside>
  <div id="docsNav" class="offcanvas-aside offcanvas-lg offcanvas-start d-flex flex-column position-fixed top-0 start-0 vh-100 bg-dark border-end-lg">
    <div class="offcanvas-header d-none d-lg-flex justify-content-start">
      <a href="index.php?action=home" class="navbar-brand d-none d-lg-flex py-0">
		    <img src="images/logo-negatif.png" class="img-fluid"    alt="Blogger">
        <span>blogger J</span>
		  </a>
    </div>
    <div class="offcanvas-header d-block d-lg-none border-bottom">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <h5 class="d-lg-none mb-0">Menu</h5>
        <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#docsNav" aria-label="Close"></button>
      </div>
      <div class="list-group list-group-flush mx-n4">
        <a href="../index.html" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4">
          <i class="bi bi-speedometer2 fs-lg  me-2"></i>
          Tableau de bord
        </a>
        <a href="../components/typography.html" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4">
          <i class="bi bi-display fs-lg  me-2"></i>
          Le blog
        </a>
      </div>
    </div>
    <div class="offcanvas-body p-4">
      <div class="swiper-wrapper">
        <div class="swiper-slide h-auto">
          <div class="d-table position-relative mx-auto avatar-offcanvas">
            <img src="images/avatar.png" class="d-block rounded-circle" width="120" alt="John Doe">
          </div>
          <div class="profil-offcanvas">
            <h5>Isabella Bocouse</h5>
            <p>bocouse@example.com</p>
          </div>
          <!-- Flush list group -->
          <ul class="list-group list-group-flush list-group-offcanvas">
            <li class="list-group-item active">
              <div class="btn btn-icon-offcanvas-active me-2">
                  <i class="bi bi-pin-angle"></i>
              </div>
              Articles
            </li>
            <li class="list-group-item">
              <div class="btn btn-icon-offcanvas me-2">
                <i class="bi bi-chat-square"></i>
              </div>
              Commentaires
            </li>
            <li class="list-group-item">
              <div class="btn btn-icon-offcanvas me-2">
                <i class="bi bi-person"></i>
              </div>
              Utilisateurs
            </li>
          </ul>                     
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
  <section class="section-breadcrumb container-fluid p-5">
    <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
      <ol class="breadcrumb pt-lg-3 mb-0">
        <li class="breadcrumb-item">
          <a class="breadcrumb-links" href="index.php?action=admin"><i class="bi bi-speedometer2 fs-lg me-1"></i>Tableau de bord</a>
        </li>
        <li class="breadcrumb-item">
          <a class="breadcrumb-links" href="index.php?action=blog">Blog</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Développement d'applications</li>
      </ol>
    </nav>
    <div class="container pb-4 mt-n1 mt-lg-0">
      <h1 class="title-dasboard">Tableau de bord</h1>
      <span class="subtitle">Une succession d’articles à propos de sujets précis sur les applications</span>    
    </div>
  </section>

  <section class="container-fluid p-5">
    <div class="container py-4 mb-lg-2">
    <div class="row">
      <div class="col-lg-5 d-flex flex-column text-center text-lg-start mb-3 mb-sm-4 mb-lg-0">
        <h2 class="h1">Bienvenue User !</h2>
        
          <img src="images/bloggerj-img-01.svg" class="img-fluid featured-image-post" alt="image">
       
        
        </div>
        <div class="col-lg-7 col-xl-6 offset-xl-1">
          <div class="card card-background">
            <div class="card-body">
              <div class="row g-4 g-xl-5">
                 
                <div class="col-sm-6">
                      <div class="card card-light">
                        <div class="card-body">
                          <div class="d-table flex-shrink-0 icon-utils">
                            <i class="bi bi-speedometer2 fs-lg"></i>
                          </div>
                          <h3 class="h4 mt-4 mb-2">Administration</h3>
                          <p class="mb-2">Gérer le contenu publié du blog</p>     
                        </div>
                      </div>
                </div>
                <div class="col-sm-6">
                      <div class="card card-light">
                        <div class="card-body">
                          <div class="d-table flex-shrink-0 icon-utils">
                            <i class="bi bi-pin-angle fs-lg"></i>
                          </div>
                          <h3 class="h4 mt-4 mb-2">Articles</h3>
                          <p class="mb-2">Créez des contenus riches</p>
                        </div>
                      </div>
                </div>
                <div class="col-sm-6">
                      <div class="card card-light">
                        <div class="card-body">
                          <div class="d-table flex-shrink-0 icon-utils">
                            <i class="bi bi-chat-square fs-lg"></i>
                          </div>
                          <h3 class="h4 mt-4 mb-2">Commentaires</h3>
                          <p class="mb-2">Valider les commentaires</p>
                         
                        </div>
                      </div>
                </div>
                <div class="col-sm-6">
                      <div class="card card-light">
                        <div class="card-body">
                          <div class="d-table flex-shrink-0 icon-utils">
                            <i class="bi bi-person fs-lg"></i>
                          </div>
                          <h3 class="h4 mt-4 mb-2">Utilisateurs</h3>
                          <p class="mb-2">Gérer les comptes de vos utilisateurs</p>
                        </div>
                      </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>

 
</main>









      


<?php $content = ob_get_clean(); ?>
<?php require('templates/layout.php') ?>