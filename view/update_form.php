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
<div class="container-fluid px-4 d-flex justify-content-center">
    <div class="">
        <h1 class="">Modifier <?php echo $recette->getTitre();?></h1>

        <form method="post" enctype="multipart/form-data" action="index.php?controller=recette&action=updateRecette&id=<?php echo $recette->getId()?>">
            <label class="mb-2">Titre</label>
            <input required name="titre" value="<?php echo $recette->getTitre()?>" class="form-control">

            <label class="my-2">Ingrédient</label>
            <input required name="ingredient" value="<?php echo $recette->getIngredient()?>" class="form-control">
            
            <label class="my-2">Description</label>
            <textarea name="description" class="form-control"><?php echo $recette->getDescription()?></textarea>

            <label class="my-2">Image</label><br>
            <div class="uploadsHeight"><img src="<?php echo('assets/uploads/'.$recette->getFileName()); ?>"/></div>
            <label class="my-2">Télécharger une nouvelle image :</label><br>
            <input required type="file" name="image" class=""><br>
            <div class="text-center">
                <input class="btn btn-danger mt-3" type="submit" value="valider">
            </div>
        </form>
    </div>
</div>
<?php
    include 'parts/bootstrapfile.html';
?>
</body>