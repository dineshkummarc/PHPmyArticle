<!DOCTYPE html>
<html>

<?php
include("header.php");
include('classPost.php');

$posts = new Post($db);
?>


<main class="blogPage">
    <?php foreach ($posts->getSinglePost($_GET['slug']) as $post) { ?>
        <section style="background-image: url(<? echo " images/" . $post['imgName'] ?>);" class="section-profile-cover section-shaped my-0">
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


        <section class="section blogPage__content">
            <div class="container  pt-4">
                <div class="card card-profile shadow mt--300 pb-4">
                    <div class="px-4">

                        <h1 class=" mt-5 pb-2"> <?php echo $post['title'] ?> </h1>

                        <?php echo $post['content'] ?>

                    </div>
                </div>
            </div>
        </section>


    <?php } ?>

</main>


<?php
include('footer.php')
?>
</body>

</html>