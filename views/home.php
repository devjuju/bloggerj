<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
 <!-- home-->
 <div class="background-home">
      <section class="section-home">
      <div class="container position-relative zindex-5 py-5">
          <div class="row justify-content-md-start justify-content-center">
            <div class="col-md-6 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
              <div class="mb-md-5 pb-xl-5 mb-4">

                <!-- Video popup btn -->
                <div class="d-inline-flex align-items-center position-relative mb-3">
                  <a href="https://www.youtube.com/watch?v=zPo5ZaH6sW8" class="btn btn-video btn-icon btn-lg flex-shrink-0 me-3 stretched-link" data-bs-toggle="video" aria-label="Play video" data-lg-id="1ed31a22-4840-47bf-9a9e-b161fe13bb4a">
                    <i class="bi bi-person"></i>
                  </a>
                  <h4 class="mb-0">Justine Leleu</h4>
                </div>

                <!-- Text -->
                <h1 class="title-home">
                Une développeuse web passionnée et créative en vue d’évolution 
                </h1>
                <p class="d-lg-block d-none mb-0 ps-md-3">Avec une soif d’apprentissage assidue vous offrant des solutions adaptées à votre domaine d’activité sans limites ni contraintes
                   au delà de vos espérances.</p>
                <div class="d-md-flex align-items-md-start">
    
                <a href="contacts-v1.html" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Voir mon blog</a>
                <a href="contacts-v1.html" class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">CV</a>
               
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
              <div class="mb-md-5 pb-xl-5 mb-4">

              <img src="images/entete.png" alt="entete">

             
              </div>
            </div>

           
          </div>
        </div>
      </section>

    </div>
<?php $content = ob_get_clean(); ?>
<?php require('templates/gabarit.php') ?>