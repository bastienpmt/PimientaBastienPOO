<html>
    <head>
        <?php
        include 'parts/bootstrapLink.html';
        include 'parts/navbar.html';
        ?>
    </head>

    <body>
    <a href="../MyRecettesMvc/index.php?controller=default&action=home" class="mx-3">
        <button class="btn btn-danger mt-4">Retour</button>
    </a>
    <div class="container-fluid px-5">
        <div class="row d-flex justify-content-center">

            <div class="px-5 pb-4">
                <fieldset class="shadow p-3 px-5">
                    <legend class="px-2"><?php echo $recette->getTitre()?></legend>
                    <div class="cardsImageHeight"><img src="<?php echo('assets/uploads/'.$recette->getFileName()); ?>"/>
                    </div>      
                    <div>
                        <h5 class="m-4 p-2 text-center font-italic">Les ingrédients</h5>
                        <p class="mx-4 p-2">- <?php echo $recette->getIngredient()?></p> 
                    </div>
                    <div>
                        <h5 class="m-4 p-2 text-center font-italic">La préparation</h5>
                        <p class="mx-4 p-2"><?php echo $recette->getDescription()?>
                    </div> 
                    <div class="text-right mt-4">
                        <a class="text-danger" href="../MyRecettesMvc/index.php?controller=recette&action=delete&id=<?php echo $recette->getId()?>">
                         Supprimer
                        </a>  ou  
                        <a class="text-danger" href="../MyRecettesMvc/index.php?controller=recette&action=updateForm&id=<?php echo $recette->getId()?>">
                         Modifier
                        </a>
                    </div>
                
                </fieldset>
            </div>
        </div>
    </div>
    <?php
        include 'parts/bootstrapFile.html';
    ?>
    </body>
</html>