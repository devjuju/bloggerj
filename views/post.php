<?php $title = "Post"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="section-breadcrumb container-fluid p-5">
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
    <h1>Exemple de page de post</h1>
    <div class="d-flex flex-row bd-highlight mb-3">
                  <div class="space-between-meta bd-highlight">
                    <i class="bi bi-person fs-base icone-color-primary"></i>
                    <span class="fs-sm">Auteur</span>
                  </div>
                  <div class="bd-highlight">
                    <i class="bi bi-clock fs-base icone-color-primary"></i>
                    <span class="fs-sm">Sep 16, 2023</span>
                  </div>
                </div>   
  </div>
</section>



<section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row">
          <div class="col-lg-7  mb-lg-0">
          <img src="images/StockSnap_Q3N39D0OEJ.webp" class="img-fluid featured-image-post" alt="image">
          <h2 class="mb-md-0">A propos du post</h2>
        <p class="fs-lg mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

          <p class="fs-lg mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>


          <!-- plus de détails -->
          <!-- Accordion: Alternative style -->
          <div class="accordion accordion-flush mt-5" id="accordionFlushExample">
  <div class="accordion-item accordion-more-details border-0 rounded-3 mb-3">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Plus de détails
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>


  
</div>
          <!-- Accordion: Alternative style -->
  

     <!-- Image on top -->
 
            
            <hr class="separateur-page-blog">
         

    

    

          <div class="bloc-comments mt-5"> 
          <div class="d-md-flex align-items-center justify-content-between text-center text-md-start pb-1 pb-lg-0 mb-4 mb-lg-5 mt-5">
          <h3 class="mb-md-0">Commentaires</h3>
          <a href="index.php?action=posts" class="btn btn-outline-primary">
            <i class="bi bi-chat-square-dots fs-xl "></i>
            Ajouter un commentaire
          </a>
        </div>
         

            <!-- Comment -->
            <div class="py-4">
              <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                <div class="d-flex align-items-center me-3">
                  <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
                  <div class="ps-3">
                    <h6 class="fw-semibold mb-0">Esther Howard</h6>
                    <span class="fs-sm text-muted">4 mins ago</span>
                  </div>
                </div>
                <a href="#" class="nav-link fs-sm px-0">
                  <i class="bi bi-reply fs-lg me-2"></i>
                  Répondre
                </a>
              </div>
              <p class="mb-0">Nibh enim porta ut augue felis, donec sit luctus. Quis ullamcorper dolor sit mauris. Hendrerit eu libero, eu tristique sodales ultrices etiam adipiscing. Donec viverra sodales arcu gravida nibh at. Neque lobortis quis porta integer et placerat lectus scelerisque. Velit eget malesuada morbi faucibus at sed euismod. Tortor, eu ut id tincidunt leo placerat luctus.</p>
            </div>

            <hr class="my-2">

            <!-- Comment -->
            <div class="py-4">
              <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                <div class="d-flex align-items-center me-3">
                  <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
                  <div class="ps-3">
                    <h6 class="fw-semibold mb-0">Ralph Edwards</h6>
                    <span class="fs-sm text-muted">September 9 at 12:48</span>
                  </div>
                </div>
                <a href="#" class="nav-link fs-sm px-0">
                  <i class="bi bi-reply fs-lg me-2"></i>
                  Répondre
                </a>
              </div>
              <p class="mb-0 pb-2">Eget amet, ac scelerisque tellus sed. Sapien duis sit neque pulvinar. Est sit aenean nisl etiam donec mattis ut diam. Luctus massa eu nunc aliquam viverra tempus, eu amet, luctus. Ac faucibus vestibulum eu lacus. Ullamcorper sem ultrices tincidunt pharetra?</p>

              <!-- Comment reply -->
              <div class="position-relative ps-4 mt-4">
                <span class="position-absolute top-0 start-0 w-1 h-100 bg-primary"></span>
                <div class="d-flex align-items-center justify-content-between ps-3 pb-2 mb-1">
                  <div class="d-flex align-items-center me-3">
                    <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
                    <div class="ps-3">
                      <h6 class="fw-semibold mb-0">Albert Flores</h6>
                      <span class="fs-sm text-muted">16 hours ago</span>
                    </div>
                  </div>
                  <a href="#" class="nav-link fs-sm px-0">
                    <i class="bi bi-reply fs-lg me-2"></i>
                    Répondre
                  </a>
                </div>
                <p class="ps-3 mb-0"><a href="#" class="fw-semibold text-decoration-none text-color-primary">@Ralph Edwards</a> Vulputate malesuada amet, consequat ullamcorper. Orci, cras maecenas in sit purus pellentesque. Ridiculus blandit pellentesque eget arcu morbi nisl. Morbi volutpat adipiscing sapien sed ut tempor.</p>
              </div>
            </div>

            <hr class="my-2">

            <!-- Comment -->
            <div class="py-4">
              <div class="d-flex align-items-center justify-content-between pb-2 mb-1">
                <div class="d-flex align-items-center me-3">
                  <img src="images/avatar.png" class="rounded-circle" width="48" alt="Avatar">
                  <div class="ps-3">
                    <h6 class="fw-semibold mb-0">Cameron Williamson</h6>
                    <span class="fs-sm text-muted">March 24 at 8:20</span>
                  </div>
                </div>
                <a href="#" class="nav-link fs-sm px-0">
                  <i class="bi bi-reply fs-lg me-2"></i>
                  Répondre
                </a>
              </div>
              <p class="mb-0">Mattis id ut sed arcu metus elit faucibus condimentum aliquam. Nam adipiscing diam et suspendisse. Sagittis massa maecenas laoreet nulla amet nunc sagittis, pulvinar neque. Duis imperdiet ipsum suspendisse massa lectus habitasse. Id ante volutpat hendrerit augue parturient eget. Ac vitae posuere leo morbi vitae at hac lectus. Nibh neque quam quis amet mattis sit. Faucibus risus at sit tempus ut.</p>
            </div>
      
          </div>


          <div class="card card-comment-form p-md-5 p-4 border-0 ">
              <div class="card-body w-100 mx-auto px-0" style="max-width: 746px;">
                <h3 class="pb-3">Laisser un commentaire</h3>
                <form class="row gy-4 needs-validation" novalidate="">
                  <div class="col-12">
                    <label for="c-comment" class="form-label fs-base">Commenter le post</label>
                    <textarea id="c-comment" class="form-control form-control-lg" rows="3" placeholder="Taper votre commentaire ici..." required=""></textarea>
                    <span class="invalid-tooltip">Please, enter your comment.</span>
                    <div class="form-text">Les utilisateurs peuvent ajouter un commentaire ou discuter avec un autre utilisateur</div>
                  </div>
                  
              
                  <div class="col-12">
                    <button type="submit" class="btn btn-lg btn-primary mt-2">Publier le commentaire</button>
                  </div>
                </form>
              </div>
            </div>



        
        

      


      


           
     
          </div>
          <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
           
          <div class="card card-shadow mb-5">
                <div class="card-body">
                    <h4>Partager le post avec :</h4>
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


           
<!-- Basic card example -->
<div class="card card-background">
  <div class="card-body">

  <h5 class="card-title">Abonnez-vous!</h5>
  <p class="pb-4 mb-0 mb-lg-3">Les utilisateurs ont la possibilité de 
suivre mon blog et de le commenter.</p>
                  <form class="needs-validation" novalidate="">
                    <div class="input-group mb-3">
                      <i class="bi bi-envelope position-absolute start-0 top-50 translate-middle-y zindex-5 ms-3 text-muted d-lg-inline-block d-none"></i>
                      <input type="email" placeholder="Your Email" class="form-control ps-lg-5 rounded text-lg-start text-center" required="">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                  </form>
  </div>
</div>













          </div>
        </div>
      </section>










<?php $content = ob_get_clean(); ?>
<?php require('templates/gabarit.php') ?>