<?php $title = "Compte"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="section-breadcrumb container-fluid p-5">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Mon compte</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1>Mon compte
    </h1>
  </div>
</section>



<section class="container pt-5">
        <div class="row">

  
          <!-- Sidebar (User info + Account menu) -->
          <aside class="col-lg-3 col-md-4  pb-5 mt-n5">
            <div class="position-sticky top-0">
              <div class="text-center pt-5">
                <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
                  <img src="images/avatar.png" class="d-block rounded-circle" width="120" alt="John Doe">
                  <button type="button" class="btn btn-icon btn-light bg-white btn-sm border rounded-circle shadow-sm position-absolute bottom-0 end-0 mt-4" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Change picture" data-bs-original-title="Change picture">
                    <i class="bi bi-lock"></i>
                  </button>
                </div>
                <h2 class="h5 mb-1">John Doe</h2>
                <p class="mb-3 pb-3">jonny@email.com</p>
                <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3" data-bs-toggle="collapse" data-bs-target="#account-menu">
                  <i class="bi bi-lock fs-xl me-2"></i>
                  Account menu
                  <i class="bi bi-lock fs-lg ms-1"></i>
                </button>
                <div id="account-menu" class="list-group list-group-flush collapse d-md-block">
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                  <div class="btn btn-icon-secondary-aside active">
                  <i class="bi bi-gear"></i>
                </div>
                    
                  Details du compte
                  </a>


                  <a href="index.php?action=accountsecurity" class="list-group-item list-group-item-action d-flex align-items-center ">
                  <div class="btn btn-icon-secondary-aside">
                  <i class="bi bi-lock"></i>
                </div>
                    
                  Sécurité du compte
                  </a>




                  <a href="index.php?action=home" class="list-group-item list-group-item-action d-flex align-items-center">
                  <div class="btn btn-icon-secondary-aside ">
                  <i class="bi bi-box-arrow-left"></i>
                </div>
                    Se déconnecter
                  </a>
               
                
                
                </div>
                
              </div>
            </div>


            
          </aside>


          <!-- Account details -->
          <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
          <div class="card border-light shadow-lg py-3 p-sm-4 p-md-5">
          <div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
          <h3 class="fw-bold text-gray-900 display-6">Détails du compte</h3>
                    <div class="text-muted fw-semibold fs-5">
                        Devenir rédacteur ou contributeur du blog ?
                        <a href="index.php?action=register" class="text-color-primary fw-bold">Contacter l'administrateur</a>
                        
                    </div>
     <br> <br>

              <!-- Basic info -->
              <h2 class="h5 text-primary mb-4">Informations personnelles</h2>
              <form class="needs-validation border-bottom pb-3 pb-lg-4" novalidate="">
                <div class="row pb-2">
                <div class="col-sm-12 mb-4">
                  
                  

                  
                    <label for="sn" class="form-label fs-base">Pseudo</label>
                    <input type="text" id="sn" class="form-control form-control-lg" value="DoeJohn" required="">
                    <div class="invalid-feedback">Please enter your pseudo!</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="fn" class="form-label fs-base">Nom</label>
                    <input type="text" id="fn" class="form-control form-control-lg" value="John" required="">
                    <div class="invalid-feedback">Please enter your first name!</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="sn" class="form-label fs-base">Prénom</label>
                    <input type="text" id="sn" class="form-control form-control-lg" value="Doe" required="">
                    <div class="invalid-feedback">Please enter your second name!</div>
                  </div>
                
                  <div class="col-sm-6 mb-4">
                    <label for="email" class="form-label fs-base">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" value="jonny@email.com" required="">
                    <div class="invalid-feedback">Please provide a valid email address!</div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="phone" class="form-label fs-base">Téléphone <small class="text-muted">(optional)</small></label>
                    <input type="text" id="phone" class="form-control form-control-lg" data-format="{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}" placeholder="+1 ___ ___ __">
                  </div>
 
                </div>
                <div class="d-flex mb-3">
                  <button type="reset" class="btn btn-secondary me-3">Annuler</button>
                  <button type="submit" class="btn btn-primary">Changer</button>
                </div>
              </form>

           
              

              <!-- Delete account -->
              <h2 class="h5 text-primary pt-1 pt-lg-3 mt-4">Supprimer votre compte</h2>
              <p>Lorsque vous supprimez votre compte, votre profil public sera immédiatement désactivé. </p>
              <div class="form-check mb-4">
                <input type="checkbox" id="delete-account" class="form-check-input">
                <label for="delete-account" class="form-check-label fs-base">Oui, je veux supprimer mon compte</label>
              </div>
              <button type="button" class="btn btn-danger">Supprimer</button>
            </div>
          </div>
          
          </div>
        </div>
      </section>









<?php $content = ob_get_clean(); ?>
<?php require('templates/gabarit.php') ?>