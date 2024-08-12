<?php $title = "Contact";
?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="section-breadcrumb container-fluid p-5">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1>Contact</h1>
    <span class="subtitle">Besoins de plus d’infos ? N’hésitez pas à me contacter !</span>    
  </div>
</section>




<section class="pt-5">
        <div class="container position-relative zindex-2 pt-5">
          <div class="row">

            <!-- Contact links -->
            <div class="col-xl-4 col-lg-5 pb-4 pb-sm-5 mb- mb-sm-0">
              <div class="pe-lg-4 pe-xl-0">
                <h2 class="pb-3 pb-md-4 mb-lg-5">Besoins de plus d’infos ?</h2>
                <div class="card border-light shadow-lg py-2 p-sm-2 p-md-4">
                <div class="d-flex align-items-start ">
                <img src="images/avatar.png" class="rounded-circle" width="60" alt="Avatar">
                  <div class="ps-3 ps-sm-4">
                    <h4 class="mb-2">Mon profil</h4>
                    <p class="texte-info mb-2">Développeur web </p>
                   
                  </div>
                </div>
                 </div>
                 <div style="height: 50px;"></div>
                 <div class="card border-light shadow-lg py-2 p-sm-2 p-md-4">
                <div class="d-flex align-items-start ">
                  <div class="background-icone-primary rounded-circle flex-shrink-0 fs-3 lh-1 p-3">
                    <i class="bi bi-envelope icone-primary"></i>
                  </div>
                  <div class="ps-3 ps-sm-4">
                  <h4 class="mb-2">Mon mail</h4>
                    <p class="texte-info mb-2">jleleubellpro1994@gmail.com  </p>
                  </div>
                </div>
                 </div>
                
               
              </div>
              <div class="d-flex align-items-start page-contact-reseaux-sociaux">
              <h5 class="retrouvez-moi-sur">Retrouvez-moi sur :</h5>
            
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
            



            <!-- Contact form -->
            <div class="col-xl-6 col-lg-7 offset-xl-2">
              <div class="card-shadow py-3 p-sm-4 p-md-5">
                <div class="card-header">
                <h3 class="fw-bold text-gray-900 display-6">Me contacter</h3>
                    <p class="text-muted fw-semibold fs-5">
                    N'hésitez pas à m'écrire. je vous répondrai dans les plus brefs délais.</p>
                     
                </div>
               
                <div class="card-body">
                 
                
                

            <form  method="post" class="needs-validation" novalidate>
            <div class="row g-4">
                <!--begin::Form group-->
                <div class="col-sm-6 form-group-style">
                  <label class="form-label fs-base" for="lastname">Nom</label>
                  <input type="text" id="lastname" name="contact[lastname]" placeholder="Entrer un nom" value="<?= isset($contact) ? $contact->getLastname() : '' ?>">
                  <?= isset($controle["lastname"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["lastname"] . "</p>" : '' ?>   
                </div>
                <!--end::Form group-->
                <!--begin::Form group-->
                <div class="col-sm-6 form-group-style">
                  <label class="form-label fs-base" for="firstname">Prénom</label>
                  <input type="text" id="firstname" name="contact[firstname]" placeholder="" value="<?= isset($contact) ? $contact->getFirstname() : '' ?>">
                  <?= isset($controle["firstname"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["firstname"] . "</p>" : '' ?>
                </div>
                 <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">
                  <label class="form-label fs-base" for="email">Email</label>
                  <input type="email" placeholder="" id="email" name="contact[email]" value="<?= isset($contact) ? $contact->getEmail() : '' ?>">
                  <?= isset($controle["email"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["email"] . "</p>" : '' ?>
                </div>
                 <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">
                  <label class="form-label fs-base" for="sujet">Sujet</label>
                  <input type="text" placeholder="" id="sujet" name="contact[sujet]" value="<?= isset($contact) ? $contact->getSubject() : '' ?>">
                  <?= isset($controle["sujet"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["sujet"] . "</p>" : '' ?>
                </div>
                 <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">
                  <label class="form-label fs-base" for="message">Message</label>
                  <textarea rows="6" placeholder="Enter your message here..." name="contact[message]" id="message"><?= isset($contact) ? $contact->getMessage() : '' ?></textarea>
                  <?= isset($controle["message"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["message"] . "</p>" : '' ?>
                </div>
                <div class="col-sm-12 pt-4">
                <div class="d-flex flex-wrap">
                <a href="index.php?action=home"><button type="button" class="btn btn-secondary me-3">Annuler</button></a> 
                <button type="submit" class="btn btn-primary">Envoyer</button>
                    
                </div>
                </div>
              </div>
              </form>
  









     




      
          

               
               
              
            






        



              





         
                </div>
              </div>
            </div>
          </div>
        </div>


      </section>






<?php $content = ob_get_clean(); ?>
<?php require('templates/gabarit.php') ?>