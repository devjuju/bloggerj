<?php $title = "S'inscrire"; ?>
<?php ob_start();

?>




<!-- breadcrumb -->
<section class="container-fluid p-5 bg-light-subtle">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">S'inscrire</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1 class="titre-page">Créer un compte</h1>
  </div>
</section>

<section class="container py-5 my-1 my-md-4 my-lg-5">
    <div class="row gx-5">
        <div class="col-6">
            <div class="col-left-content">
               
                <img src="images/blogger—j-img02.svg" class="img-fluid featured-image-post" alt="image">
            </div>
        </div>
        <div class="col-6">
            <div class="card-shadow py-3 p-sm-4 p-md-5">
                <div class="card-header">
                    <h2 class="titre-section">S'inscrire</h2>
                    <p class="text-muted fw-semibold fs-5">
                        Entrez vos coordonnées pour créer votre compte
                    </p>
                </div>
                <div class="card-body">
             
                    <form  method="post" class="needs-validation" novalidate>
            <div class="row g-4">
                <!--begin::Form group-->
                <div class="col-sm-6 form-group-style">
                  <label class="form-label fs-base" for="lastname">Nom</label>
                  <input type="text" id="lastname" name="register[lastname]" placeholder="Entrer un nom" value="<?= isset($register) ? $register->getLastname() : '' ?>">
                  <?= isset($controle["lastname"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["lastname"] . "</p>" : '' ?>   
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="col-sm-6 form-group-style">
                  <label class="form-label fs-base" for="firstname">Prénom</label>
                  <input type="text" id="firstname" name="register[firstname]" placeholder="" value="<?= isset($register) ? $register->getFirstname() : '' ?>">
                  <?= isset($controle["firstname"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["firstname"] . "</p>" : '' ?>
                </div>

                 <!--begin::Form group-->
                 <div class="col-sm-12 form-group-style">
                  <label class="form-label fs-base" for="sujet">Pseudo</label>
                  <input type="text" placeholder="" id="sujet" name="register[username]" value="<?= isset($register) ? $register->getUsername() : '' ?>">
                  <?= isset($controle["username"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["username"] . "</p>" : '' ?>
                </div>
                 <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">
                  <label class="form-label fs-base" for="email">Email</label>
                  <input type="email" placeholder="" id="email" name="register[email]" value="<?= isset($register) ? $register->getEmail() : '' ?>">
                  <?= isset($controle["email"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["email"] . "</p>" : '' ?>
                </div>
                 <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">
                <div class="form-group-password">                   <label for="password" class="form-label fs-base">Mot de passe</label>
                        <input type="password" id="password" name="register[password]" value="<?= isset($register) ? $register->getPassword() : '' ?>">
                        <?= isset($controle["password"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["password"] . "</p>" : '' ?>
                            </div>
                </div>
                 <!--begin::Form group-->

                 
             
          
                
                <div class="col-sm-12 pt-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Envoyer</button>
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