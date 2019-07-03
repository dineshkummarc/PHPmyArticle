<!DOCTYPE html>
<html>

<?php include("header.php"); ?>

<main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
        <!-- Circles background -->
        <div class="shape shape-style-1 shape-primary alpha-4">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="card card-profile shadow mt--300">


                <div class="row row-grid align-items-center">
                    <div class="col-md-6">
                        <div class="card bg-default shadow border-0">
                            <img src="../assets/img/theme/img-1-1200x1000.jpg" class="card-img-top">
                            <blockquote class="card-blockquote">
                                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95" class="svg-bg">
                                    <polygon points="0,52 583,95 0,95" class="fill-default" />
                                    <polygon points="0,42 583,95 683,0 0,95" opacity=".2" class="fill-default" />
                                </svg>
                                <h4 class="display-3 font-weight-bold text-white">Design System</h4>
                                <p class="lead text-italic text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pl-md-5">
                            <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5">
                                <i class="ni ni-settings"></i>
                            </div>
                            <h3>Our customers</h3>
                            <p class="lead">Don't let your uses guess by attaching tooltips and popoves to any element. Just make sure you enable them first via JavaScript.</p>
                            <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                            <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                            <a href="#" class="font-weight-bold text-warning mt-5">A beautiful UI Kit for impactful websites</a>
                        </div>
                    </div>

                </div>



                <section class="section section-lg" style="padding: 20px">
                    <div class="container">
                        <div class="row row-grid align-items-center">
                            <div class="col-md-6 order-md-2">
                                <img src="../assets/img/theme/promo-1.png" class="img-fluid floating">
                            </div>
                            <div class="col-md-6 order-md-1">
                                <div class="pr-md-5">
                                    <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle mb-5">
                                        <i class="ni ni-settings-gear-65"></i>
                                    </div>
                                    <h3>Awesome features</h3>
                                    <p>The kit comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                                    <ul class="list-unstyled mt-5">
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="badge badge-circle badge-success mr-3">
                                                        <i class="ni ni-settings-gear-65"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Carefully crafted components</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="badge badge-circle badge-success mr-3">
                                                        <i class="ni ni-html5"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Amazing page examples</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="py-2">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div class="badge badge-circle badge-success mr-3">
                                                        <i class="ni ni-satisfied"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0">Super friendly support team</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
    </section>





    <script>
        var myEditor;
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                // console.log('Editor was initialized', editor);
                myEditor = editor;
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</main>


<button type="button" class="btn btn-block btn-warning mb-3" style="display: none" data-toggle="modal" data-target="#add">open</button>
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Post created</h4>
                    <p>Your data successful added</p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<?php
include('footer.php')
?>
</body>

</html>