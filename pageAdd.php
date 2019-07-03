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
                            <input type="text" id="title" name="title" placeholder="Title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Subtitle</label>
                            <input type="text" id="subtitle" name="subtitle" placeholder="subtitle" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" placeholder="Desciption" class="form-control" rows="2" id="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea placeholder="content" name="content" id="content"></textarea>
                        </div>
                        <button class="btn btn-1 btn-primary" id="create" type="button">Create</button>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <script>
        var myEditorContent;

        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => myEditorContent = editor)
            .catch(error => console.error(error));
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