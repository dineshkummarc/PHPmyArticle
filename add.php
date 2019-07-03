<!DOCTYPE html>
<html>

<?php include("header.php"); ?>

<main>
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
        <div class="container  pt-4">
            <div class="card card-profile shadow mt--300">
                <div class="px-4">

                    <h1 class=" mt-5 pb-2">Create New Post</h1>

                    <div class=" mt-4 pb-4">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" placeholder="Regular" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="editor">Description</label>
                            <textarea name="content" id="editor"></textarea>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>



    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
</main>
<?php
include('footer.php')
?>
</body>

</html>