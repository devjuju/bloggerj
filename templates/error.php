<?php



ob_start();

?>
<section class="container-fluid position-relative px-0">
    <div class="row g-0">
        <div class="col-xl-6 col-lg-5 pe-lg-5">
            <div class="d-flex h-100 pe-xl-4">
                <img src="images/bloggerj-exception-img.svg" class="img-fluid" alt="image">
            </div>
        </div>
        <div class="col-xl-6 col-lg-5 position-relative py-5">

            <div class="position-relative zindex-5 text-center text-lg-start px-3 px-lg-0 py-xl-4 py-xxl-5 mt-lg-3 mx-auto mx-lg-0" style="max-width: 530px;">
                <h2 class="h3 text-primary">Une erreur est survenue !</h2>
                <br>
                <h1 class="heading-home">Erreur</h1>
                <!--begin::Alert-->
                <!-- Warning alert -->

                <div class="alert alert-warning" role="alert">
                    <h3>Message d'erreur</h3>
                    <p><?= $message

                        ?></p>

                </div>


                <!--end::Alert-->
                <br>
                <a href="index.php?action=home" class="btn btn-primary shadow-primary btn-lg me-sm-3 me-xl-4 mb-3">Retour à la page d'accueil</a>
            </div>
        </div>
    </div>

</section>

<?php $content = ob_get_clean(); ?>
<?php require '../templates/layout_errors.php'; ?>