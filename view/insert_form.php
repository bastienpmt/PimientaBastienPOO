<html>
<head>
    <?php
    include 'parts/bootstrapLink.html';
    include 'parts/navbar.html';
    ?>
</head>
<body>
<a href="../MyRecettesMvc/index.php?controller=default&action=home" class="mx-3">
    <button style="margin-bottom:10px;" class="btn btn-danger mt-4">Retour</button>
</a>
<div class="container-fluid p-4 d-flex justify-content-center">
    <div class="">
        <h1 class="">Ajouter une recette :</h1>

        <form method="post" enctype="multipart/form-data" action="index.php?controller=recette&action=addRecette">
        <label class="my-2">Titre</label>
        <input required name="titre" class="form-control">

        <label class="my-2">Ingredient</label>
        <input required name="ingredient" class="form-control">

        <label class="my-2">Description</label>
        <textarea maxlength="500" name="description" class="form-control"></textarea>

        <label class="my-2">Image</label><br>
        <input required type="file" name="image" class="">

        <div class="text-center">
            <input class="btn btn-danger mt-3" type="submit" value="valider">
        </div>
        </form>
    </div>
</div>
<?php
 include 'parts/bootstrapFile.html'
?>
</body>