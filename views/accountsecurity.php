<?php $title = "Sécurité du compte"; ?>
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
                  <a href="index.php?action=account" class="list-group-item list-group-item-action d-flex align-items-center">
                  <div class="btn btn-icon-secondary-aside">
                  <i class="bi bi-gear"></i>
                </div>
                    
                  Details du compte
                  </a>


                  <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                  <div class="btn btn-icon-secondary-aside active">
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
        



            <div class="ps-md-3 ps-lg-0 mt-md-2 pt-md-4 pb-md-2">
            <h3 class="fw-bold text-gray-900 display-6">Sécurité du compte</h3>
            <div class="text-muted fw-semibold fs-5">
                        Pour plus de sécurité, changer votre mot de passe régulièrement.
                        
                    </div>
               <br>
              <!-- Password -->
              

           <!--
            <form class="needs-validation border-bottom pb-3 pb-lg-4" novalidate="">
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <label for="cp" class="form-label fs-base">Current password</label>
                    <div class="password-toggle">
                      <input type="text" id="cp" class="form-control form-control-lg" value="jonnyPass" required="">
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                      </label>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Incorrect password!</div>
                    </div>
                  </div>
                </div>
                <div class="row pb-2">
                  <div class="col-sm-6 mb-4">
                  <label for="pass-input" class="form-label">Password</label>
  <input class="form-control" type="password" id="pass-input" value="mypasswordexample">
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="cnp" class="form-label fs-base">Confirm new password</label>
                    <div class="password-toggle">
                      <input type="password" id="cnp" class="form-control form-control-lg" required="">
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                      </label>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Incorrect password!</div>
                    </div>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <button type="reset" class="btn btn-secondary me-3">Cancel</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </form>
              
-->


<form class="needs-validation" novalidate="novalidate">
                 <!--begin::Form Group-->
                <div class="row">
                      <!--begin::Form group-->
                <div class="fv-row fv-plugins-icon-container">
                    <label class="form-label fs-6 fw-bold text-gray-900">Mot de passe actuel</label>
                    <input class="form-control form-control-lg " type="password" placeholder="Password" name="password" autocomplete="off" >
                    <div class="invalid-feedback">Please provide a valid email address!</div>
                </div>
                <!--end::Form group-->
                                <div class="col-xl-6">
                                    
                                    <!--begin::Form Group-->
                                    <div class="mb-10">
                                    <div class="fv-row fv-plugins-icon-container pt-5">
                    <label class="form-label fs-6 fw-bold text-gray-900 ">Nouveau mot de passe</label>
                    <input class="form-control form-control-lg" type="password" placeholder="" name="password" autocomplete="off">
                    <div class="invalid-feedback"></div>
                </div>
                                    </div>
                                    <!--end::Form Group-->
                                </div>
                                <div class="col-xl-6">
                                    <!--begin::Form Group-->
                                    <div class="mb-10">
                                    <div class="fv-row mb-10 fv-plugins-icon-container pt-5">
                    <label class="form-label fs-6 fw-bold text-gray-900">Confirmer le mot de passe</label>
                    <input class="form-control form-control-lg" type="password" placeholder="" name="cpassword" autocomplete="off">
                <div class="invalid-feedback"></div></div>
                                    </div>
                                    <!--end::Form Group-->
                                </div>



                                
                            </div>
                <!--end::Form group-->


              

                <!--begin::Form group-->
                <div class="d-flex mt-5">
                  <button type="reset" class="btn btn-secondary me-3">Annuler</button>
                  <button type="submit" class="btn btn-primary">Changer</button>
                </div>
                <!--end::Form group-->
            </form>
             

      

       



         
              
            </div>
          </div>
          
          </div>
        </div>
      </section>









<?php $content = ob_get_clean(); ?>
<?php require('templates/gabarit.php') ?>