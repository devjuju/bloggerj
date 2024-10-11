<?php $title = "Réglages du compte"; ?>
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




                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                  <div class="box-icon-account">
                  <i class="bi bi-gear-fill"></i>
                </div>
                    
                  Réglages du compte
                  </a>
                  <a href="index.php?action=accountsecurity" class="list-group-item list-group-item-action d-flex align-items-center ">
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
                  <i class="bi bi-gear-fill text-primary lead pe-1 me-2"></i>
                  <h2 class="h4 mb-0">Réglages du compte</h2>
                  <button type="button" class="btn btn-secondary ms-auto" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Supprimer le compte</button>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Supprimer le compte ?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="alert alert-warning d-flex mb-4">
                  <i class="ai-triangle-alert fs-xl me-2"></i>
                  <p class="mb-0">Lorsque vous supprimez votre compte, votre profil public sera définitivement retiré du blog.</p>
                </div>


        <form>
          <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="confirm">
                  <label class="form-check-label text-dark fw-medium" for="confirm">Oui, je veux supprimer mon compte</label>
                 

                </div>
                <div class="col-sm-12 pt-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Supprimer mon compte maintenant</button>
                  </div>
         
                </div>
        </form>
        
      </div>
     
    </div>
  </div>
</div>
                </div>
                     
                </div>
               
                <div class="card-body">
                <form  method="post" class="needs-validation" novalidate>
            <div class="row g-4">

           



                <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">
                <div class="d-flex align-items-center">
										<label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
											<!-- Avatar place holder -->
											<span class="avatar avatar-xl">
												<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="images/avatar.png" alt="" width="80" >
											</span>
										</label>
										<!-- Upload button -->
										<label class="btn btn-sm btn-outline-primary mb-0" for="uploadfile-1">Change</label>
										<input id="uploadfile-1" class="form-control d-none" type="file">
									</div>







            
            
                 
                </div>
                <!--begin::Form group-->
                <div class="col-sm-6 form-group-style">
                  <label class="form-label fs-base" for="lastname">Nom</label>
                  <input type="text" id="lastname" name="" placeholder="Entrer un nom" value="">
        
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="col-sm-6 form-group-style">
                  <label class="form-label fs-base" for="firstname">Prénom</label>
                  <input type="text" id="firstname" name="" placeholder="" value="">
                 
                </div>
                 <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">
                  <label class="form-label fs-base" for="email">Email</label>
                  <input type="email" placeholder="" id="email" name="" value="">
               
                </div>
               
              
                <div class="col-sm-12 pt-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                  </div>
         
                </div>
              </div>
              </form>
                 
            
              

         
            

                
          
                

          
  









     




      
          

               
               
              
            






        



              





         
                </div>
              </div>

       
        
          
          </div>
        </div>
      </section>









<?php $content = ob_get_clean(); ?>
<?php require('../templates/gabarit.php') ?>