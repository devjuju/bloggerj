<?php $title = "Blog"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="section-breadcrumb container-fluid p-5">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Blog</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1>Blog</h1>   
  </div>
</section>

<section class="container py-5 my-1 my-md-4 my-lg-5">
   <div class="row">
        <div class="col-lg-7  mb-lg-0">
            <article class="card card-article border-0 ">
                <div class="position-relative">
                    <img src="images/StockSnap_Q3N39D0OEJ.webp" class="card-img-top" alt="Image">
                </div>
                <div class="card-body">

                    <span class="category-post">
                    Web
                    </span>
                    <h3>
                        <a href="#">This Week in Search: New Limits and Exciting Features</a>
                    </h3>
                    <div class="d-flex align-items-center card-metas">
                        <div class="fs-xs border-end pe-3 me-3">
                            <i class="bi bi-person-fill fs-base me-1"></i>
                            <span class="fs-sm">Auteur</span>
                        </div>
                        <div class="fs-xs pe-3 me-3">
                            <i class="bi bi-clock-fill fs-base me-1"></i>
                            <span class="fs-sm">Sep 16, 2023</span>
                        </div>                        
                    </div>
                    <p class="fs-lg mb-0">Ultricies massa iaculis vestibulum egestas vestibulum, cursus. Leo non arcu ultricies senectus a purus sed.
                    </p>
                </div>
                <div class="card-footer border-0">
                    <a href="index.php?action=post" class="btn btn-primary text-decoration-none">
                    En savoir plus
                    </a> 
                    <a href="#" class="btn btn-icon-secondary-round m-2">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </div>
            </article>
            
            <hr class="separateur-page-blog">

            <div class="d-md-flex align-items-center justify-content-between text-center text-md-start pb-1 pb-lg-0 mb-4 mb-lg-5">
          <h2 class="mb-md-0">Articles récents</h2>
          <a href="index.php?action=posts" class="btn btn-outline-primary">
            Voir tout
            <i class="bi bi-arrow-right fs-xl ms-2 me-n1"></i>
          </a>
            </div>

            <div class="row row-cols-lg-2 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">

          <!-- Item -->
          <div class="col pb-3">
          <article class="card card-article border-0 ">
              <div class="position-relative">
                <img src="images/StockSnap_Q3N39D0OEJ.webp" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
              <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="badge-content bd-highlight">
                  <a href="#" class="badge fs-sm text-nav text-decoration-none">Business</a>
                  </div>
                </div>
             
                <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="meta-content-blog bd-highlight">
                    <i class="bi bi-person fs-base me-1"></i>
                    <span class="fs-sm">Auteur</span>
                  </div>
                  <div class="meta-content-blog bd-highlight">
                    <i class="bi bi-clock fs-base me-1"></i>
                    <span class="fs-sm">Sep 16, 2023</span>
                  </div>
                </div>
                <h3>
                  <a class="card-title" href="#">This Week in Search: New Limits and Exciting Features</a>
                </h3>
                <p class="fs-lg mb-0">Ultricies massa iaculis vestibulum egestas vestibulum, cursus. Leo non arcu ultricies senectus a purus sed.</p>
              </div>
              <div class="card-footer border-0">
              <a href="#" class="btn btn-primary text-decoration-none">
              En savoir plus
               </a>
               <a href="#" class="btn btn-icon-secondary-round m-2">
                  <i class="bi bi-pencil-square"></i>
                </a>
              </div>
            </article>
          </div>

          <!-- Item -->
          <div class="col pb-3">
          <article class="card card-article border-0 ">
              <div class="position-relative">
                <img src="images/StockSnap_Q3N39D0OEJ.webp" class="card-img-top" alt="Image">
              </div>
              <div class="card-body pb-4">
              <div class="d-flex flex-row bd-highlight mb-3">
                 
                  <div class="badge-content bd-highlight">
                  <a href="#" class="badge fs-sm text-nav text-decoration-none">Business</a>
                  </div>
                </div>
             
                <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="meta-content-blog bd-highlight">
                    <i class="bi bi-person fs-base me-1"></i>
                    <span class="fs-sm">Auteur</span>
                  </div>
                  <div class="meta-content-blog bd-highlight">
                    <i class="bi bi-clock fs-base me-1"></i>
                    <span class="fs-sm">Sep 16, 2023</span>
                  </div>
                </div>
                <h3>
                  <a class="card-title" href="#">This Week in Search: New Limits and Exciting Features</a>
                </h3>
                <p class="fs-lg mb-0">Ultricies massa iaculis vestibulum egestas vestibulum, cursus. Leo non arcu ultricies senectus a purus sed.</p>
              </div>
              <div class="card-footer border-0">
              <a href="#" class="btn btn-primary text-decoration-none">
              En savoir plus
               </a>
               <a href="#" class="btn btn-icon-secondary-round m-2">
                  <i class="bi bi-pencil-square"></i>
                </a>
              </div>
            </article>
          </div>

      


            </div>
     
        </div>
        <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
            <div class="card card-shadow mb-5">
                <div class="card-body">
                    <h4>Articles récents</h4>
                    <ul class="list-unstyled mb-0">
                        <li class="pb-3 mb-3">
                            <a href="#">
                            <div class="blog-postlist-content">
                                <span class="blog-postlist-title">7 Steps in Mapping Out </span>
                                <p class="blog-postlist-intro">
                                7 Steps in Mapping Out an Effective Social Media Strategy 
                                </p>
                                <div class="meta-lists"><span class="meta-date"><i aria-hidden="true" class="bi bi-clock-fill"></i> August 24, 2023</span> </div>
                            </div>
                            </a>
                        </li>
                        <li class="pb-3 mb-3">
                            <a href="#">
                                <div class="blog-postlist-content">
                                    <span class="blog-postlist-title">7 Steps in Mapping Out </span>
                                    <p class="blog-postlist-intro">
                                    7 Steps in Mapping Out an Effective Social Media Strategy 
                                    </p>
                                    <div class="meta-lists"><span class="meta-date"><i aria-hidden="true" class="bi bi-clock-fill"></i> August 24, 2023</span> </div>
                                </div>
                            </a>
                        </li>                
                    </ul>
                    <a href="index.php?action=posts" class="btn btn-outline-primary">
                        Voir tout
                        <i class="bi bi-arrow-right fs-xl ms-2 me-n1"></i>
                    </a>
                </div>
            </div>      
            <!-- Basic card example -->
            <div class="card card-background">
                <div class="card-body">
                    <h4 class="card-title">Abonnez-vous!</h4>
                    <p class="pb-4 mb-0 mb-lg-3">Les utilisateurs ont la possibilité de suivre mon blog et de le commenter.</p>
                    <a href="#" class="btn btn-primary text-decoration-none">
                    S'inscrire
                    </a>    
                </div>
            </div>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('templates/gabarit.php') ?>



 
















