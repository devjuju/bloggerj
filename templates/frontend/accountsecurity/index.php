<?php $title = "Sécurité du compte"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="container-fluid p-5 bg-light-subtle">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Mon compte</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1 class="titre-page">Mon compte
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
                
                </div>
                <h2 class="h5 mb-1">John Doe</h2>
                <p class="mb-3 pb-3">jonny@email.com</p>
                <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3" data-bs-toggle="collapse" data-bs-target="#account-menu">
                  <i class="bi bi-lock fs-xl me-2"></i>
                  Account menu
                  <i class="bi bi-lock fs-lg ms-1"></i>
                </button>
                <div id="account-menu" class="list-group list-group-flush collapse d-md-block">
                  <a href="index.php?action=account" class="list-group-item list-group-item-action d-flex align-items-center">
                  <div class="box-icon-account">
                  <i class="bi bi-person-fill"></i>
                </div>
                    
                  Aperçu du compte
                  </a>




                  <a href="index.php?action=accountsettings" class="list-group-item list-group-item-action d-flex align-items-center">
                  <div class="box-icon-account">
                  <i class="bi bi-gear-fill"></i>
                </div>
                    
                  Réglages du compte
                  </a>
                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                  <div class="box-icon-account">
                  <i class="bi bi-lock-fill"></i>
                </div>
                    
                  Sécurité du compte
                  </a>




                  <a href="index.php?action=home" class="list-group-item list-group-item-action d-flex align-items-center exit-account">
                  <div class="box-icon-account">
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
            
          <div class="card-shadow py-3 p-sm-4 p-md-5">
                <div class="card-header">
               
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                  <i class="bi bi-lock-fill text-primary lead pe-1 me-2"></i>
                  <h2 class="h4 mb-0">Sécurité du compte</h2>
                 
                </div>
                     
                </div>
               
                <div class="card-body">
                <form novalidate="" class="pb-4">
                  
                <div class="align-items-end mb-2 row row-cols-sm-2 row-cols-1">
                  
                <div class="mb-2 col form-group-style">
                  <label class="form-label" for="account-password">Mot de passe actuel</label>
                  <input id="account-password" required="" type="password" value="motdepasse">
                
                
              </div>
                
                <div class="mb-2 col">
                  <a class="text-primary d-inline-block mb-2" href="#">Oubli du mot de passe?</a>
                </div>
              </div>
              
              <div class="align-items-end mb-2 row row-cols-sm-2 row-cols-1">
                <div class="mb-3 col form-group-style">
                  <label class="form-label" for="new_password">Nouveau mot de passe</label>
                  <input id="new_password" required="" type="password">
                </div>

                <div class="mb-3 col form-group-style">
                  <label class="form-label" for="confirm_newpass">Confirmer le nouveau mot de passe </label>
                  <input id="confirm_newpass" required="" type="password">
                </div>
                
                
             
              </div>
              
              
              <button type="submit" class="btn btn-outline-primary">Mettre à jour</button></form>
                 
             
              
              









     

            


           

                <div class="alert alert-info d-flex mb-0" role="alert">
                  <i class="bi bi-info-circle-fill fs-xl"></i>
                  <div class="ps-2">Le mot de passe doit comporter au minimum 8 caractères - plus il y en a, mieux c'est.</div>
                </div>
            

                
          
                

          
  









     




      
          

               
               
              
            






        



              





         
                </div>
              </div>

       
      
          
          </div>
        </div>
      </section>









<?php $content = ob_get_clean(); ?>
<?php require('../templates/gabarit.php') ?>