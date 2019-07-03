<!DOCTYPE html>
<html>


<?php include("header.php"); ?>

<main>
    <div class="position-relative">
        <!-- Hero for FREE version -->
        <section class="section section-lg section-hero section-shaped">
            <!-- Background circles -->
            <div class="shape shape-style-1 shape-primary" style="background-image: url('./assets/img/theme/main.jpg');
    background-size: cover;">
                <span class="span-150" style="border-radius: 0;"></span>
                <span class="span-50"></span>
                <span class="span-50" style="border-radius: 0;"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75" style="border-radius: 0;"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50" style="border-radius: 0;"></span>
                <span class="span-100"></span>
            </div>
            <div class="container shape-container d-flex align-items-center py-lg">
                <div class="col px-0">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 text-center">
                            <img src="./assets/img/brand/white.png" style="width: 100%;" class="img-fluid">
                            <p class="lead text-white">Технологии это всего лишь интсрументы, лучше решай где и как использовать их</p>
                            <div class="btn-wrapper mt-5">
                                <a href="https://www.creative-tim.com/product/argon-design-system" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0">
                                    <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                                    <span class="btn-inner--text">Usefull resources</span>
                                </a>
                                <a href="https://github.com/Yegoroot/fimanamiblog" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" target="_blank">
                                    <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                                    <span class="btn-inner--text"><span class="text-warning">This</span> on Github</span>
                                </a>
                            </div>
                            <div class="mt-5">
                                <small class="text-white font-weight-bold mb-0 mr-2">*inherited for</small>
                                <a class=" text-white" target="blunk" href="https://fimanami.com">fimanami.com ✋🏻</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
    </div>


    <section class="section section-lg section-nucleo-icons ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-3">Nucleo Icons</h2>
                    <p class="lead">
                        The official package contains over 21.000 icons which are looking great in combination with Argon Design System. Make sure you check all of them and use those that you like the most.
                    </p>
                    <div class="btn-wrapper">
                        <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/icons.html" class="btn btn-primary">View demo icons</a>
                        <a href="https://nucleoapp.com/?ref=1712" target="_blank" class="btn btn-default mt-3 mt-md-0">View all icons</a>
                    </div>
                </div>
            </div>

    </section>
    <section class="section section-shaped">
        <div class="shape shape-style-1 shape-default">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container py-md">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h1 class="text-white font-weight-light">Bootstrap carousel</h1>
                    <p class="lead text-white mt-4">Argon Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                    <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-white mt-4">See all components</a>
                </div>
                <div class="col-lg-6 mb-lg-auto">
                    <div class="rounded shadow-lg overflow-hidden transform-perspective-right">
                        <div id="carousel_example" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel_example" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-fluid" src="./assets/img/theme/img-1-1200x1000.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid" src="./assets/img/theme/img-2-1200x1000.jpg" alt="Second slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>

</main>
<?php
include('footer.php')
?>
</body>

</html>