<?php $title = "Créer un utilisateur"; ?>
<?php ob_start();
?>



<aside>
    <div id="docsNav" class="offcanvas-aside offcanvas-lg offcanvas-start d-flex flex-column position-fixed top-0 start-0 vh-100 bg-dark border-end-lg">
        <div class="offcanvas-header d-none d-lg-flex justify-content-start">
            <a href="index.php?action=admin" class="navbar-brand d-none d-lg-flex py-0">
                <img src="images/logo-negatif.png" class="img-fluid" alt="Blogger">
                <span>blogger J</span>
            </a>
        </div>
        <div class="offcanvas-header d-block d-lg-none border-bottom">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <h5 class="d-lg-none mb-0">Menu</h5>
                <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#docsNav" aria-label="Close"></button>
            </div>
            <div class="list-group list-group-flush mx-n4">
                <a href="index.php?action=admin" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4 active">
                    <i class="bi bi-speedometer2 fs-lg  me-2"></i>
                    Tableau de bord
                </a>
                <a href="index.php?action=home" class="list-group-item list-group-item-action d-flex align-items-center border-0 py-2 px-4">
                    <i class="bi bi-display fs-lg  me-2"></i>
                    Le blog
                </a>
            </div>
        </div>
        <div class="offcanvas-body p-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide h-auto spacing-col-padding-top-100">
                    <div class="d-table position-relative mx-auto avatar-offcanvas">
                        <img src="images/avatar.png" class="d-block rounded-circle" width="120" alt="John Doe">
                    </div>
                    <div class="profil-offcanvas">
                        <h5>Isabella Bocouse</h5>
                        <p>bocouse@example.com</p>
                    </div>
                    <!-- Flush list group -->
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action d-flex align-items-center active">
                            <div class="box-icon-account">
                                <i class="bi bi-pin-fill"></i>
                            </div>

                            Articles
                        </a>

                        <a href="index.php?action=comments" class="list-group-item list-group-item-action d-flex align-items-center ">
                            <div class="box-icon-account">
                                <i class="bi bi-chat-square-dots-fill"></i>
                            </div>

                            Commentaires
                        </a>
                        <a href="index.php?action=users" class="list-group-item list-group-item-action d-flex align-items-center ">
                            <div class="box-icon-account">
                                <i class="bi bi-person-fill"></i>
                            </div>

                            Utilisateurs
                        </a>

                    </div>




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

    <section class="container-fluid p-5 bg-light-subtle">
        <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
            <ol class="breadcrumb pt-lg-3 mb-0">
                <li class="breadcrumb-item">
                    <a class="breadcrumb-links" href="index.php?action=admin"><i class="bi bi-speedometer2 fs-lg me-1"></i>Tableau de bord</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="breadcrumb-links" href="index.php?action=posts">Articles</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Créer un utilisateur</li>
            </ol>
        </nav>
        <div class="container pb-4 mt-n1 mt-lg-0">
            <h1 class="title-dasboard">Créer un utilisateur</h1>
        </div>
    </section>


    <section class="container-fluid p-5 ">

        <div class="container spacing-col-padding-top-100 spacing-col-padding-bottom-100">

            <form method="post" class="needs-validation" novalidate>
                <div class="row gy-4">

                    <!-- Content -->

                    <div class="col-lg-7">
                        <h2 class="titre-h3">Formulaire de création</h2>
                        <p class="running-text mb-4 pb-2">Veillez remplir le formulaire de création pour créer un nouvel utilisateur.</p>
                        <div class="row g-4">
                            <h3 class="titre-h5">Informations principales</h3>
                            <!--begin::Form group-->
                            <div class="col-sm-12 form-group-style">
                                <label class="form-label fs-base" for="sujet">Pseudo</label>
                                <input type="text" placeholder="" id="sujet" name="contact[sujet]" value="">

                            </div>

                            <!--begin::Form group-->
                            <div class="col-sm-6 form-group-style">
                                <label class="form-label fs-base" for="lastname">Nom</label>
                                <input type="text" id="lastname" name="contact[lastname]" placeholder="Entrer un nom" value="">

                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="col-sm-6 form-group-style">
                                <label class="form-label fs-base" for="firstname">Prénom</label>
                                <input type="text" id="firstname" name="contact[firstname]" placeholder="" value="">
                            </div>

                            <div class="col-sm-12 form-group-style">


                                <!--begin::Conditions-->
                                <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                                    <!--begin::Label-->
                                    <label class="form-label">Role de l'utilisateur :</label>
                                    <!--end::Label-->


                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="conditions" value="" id="all_conditions" checked="checked">
                                        <label class="form-check-label" for="all_conditions">
                                            utilisateur
                                        </label>
                                    </div>
                                    <!--end::Radio-->

                                    <!--begin::Radio-->
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="conditions" value="" id="any_conditions">
                                        <label class="form-check-label" for="any_conditions">
                                            administrateur
                                        </label>
                                    </div>
                                    <!--end::Radio-->
                                </div>
                                <!--end::Conditions-->
                            </div>

                            <!--begin::Form group-->
                            <div class="col-sm-12 form-group-style">
                                <label class="form-label fs-base" for="email">Email</label>
                                <input type="email" placeholder="" id="email" name="contact[email]" value="">

                            </div>



                        </div>

                        <div class="row g-4 pt-5">
                            <h3 class="titre-h5">Sécurité du compte</h3>
                            <div class="col-sm-6 form-group-style">
                                <label class="form-label" for="new_password">Mot de passe</label>
                                <input id="new_password" required="" type="password">
                            </div>
                            <div class="col-sm-6 form-group-style">
                                <label class="form-label" for="new_password">Confirmer le mot de passe</label>
                                <input id="new_password" required="" type="password">
                            </div>





                        </div>


                    </div>

                    <!-- Sharing -->
                    <div class="col-lg-5 position-relative">
                        <div class="sticky-top ms-xl-5 ms-lg-4 ps-xxl-4" style="top: 105px !important;">
                            <!-- Basic card example -->
                            <div class="card card-background">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h4 class="titre-h4">Ajouter l'utilisateur</h4>
                                        <div class="d-flex justify-content-center bd-highlight mb-3">
                                            <div class="meta-content-post bd-highlight">
                                                <i class="bi bi-person-fill fs-base me-1"></i>
                                                <span class="fs-sm">Auteur</span>
                                            </div>
                                            <div class="meta-content-post bd-highlight">
                                                <i class="bi bi-clock-fill fs-base me-1"></i>
                                                <span class="fs-sm">Sep 16, 2023</span>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="d-grid gap-2">
                                        <a href="index.php?action=posts" class="btn btn-outline-primary mb-3">
                                            Annuler
                                        </a>
                                        <button type="submit" class="btn btn-primary">Ajouter l'utilisateur</button>
                                    </div>

                                </div>
                            </div>
                            <div class="card card-light-shadow mb-5">
                                <div class="card-body text-center pt-0">

                                    <div class="col-sm-12 form-group-style">
                                        <img src="images/profil-user-defaut-img.svg" class="rounded-circle" alt="Image" width="150">
                                        <br> <br>
                                        <label for="formFile" class="form-label"></label>
                                        <input type="file" id="formFile">
                                        <br><br>
                                        <!--begin::Description-->
                                        <div class="running-text">
                                            Définissez l’avatar de l'utilisateur. Seuls les fichiers image *.png, *.jpg et *.jpeg sont acceptés</div>
                                        <!--end::Description-->
                                    </div>






                                </div>
                            </div>
                        </div>


                    </div>
                </div>
        </div>

        </form>






















        </div>



    </section>




</main>












<?php $content = ob_get_clean(); ?>
<?php require('../templates/layout.php') ?>