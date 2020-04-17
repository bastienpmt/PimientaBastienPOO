<html>
    <head>
        <?php
        include 'parts/bootstrapLink.html';
        include 'parts/navbar.html';
        ?>
    </head>

    <body>
    <div class="container-fluid px-5 py-4">
        <div class="row">
            <?php
                foreach ($recettes as $rec) {
            ?>  
            <div class="col-6 px-5 py-4">
                <fieldset class="shadow p-3">
                    <legend class="px-2"><?php echo $rec->getTitre()?></legend>
                    <div class="cardsImageHeight"><img src="<?php echo('assets/uploads/'.$rec->getFileName()); ?>"/>
                    </div>      
                    <a class="text-danger d-flex justify-content-center" href="../MyRecettesMvc/index.php?controller=recette&action=displayForm&id=<?php echo $rec->getId()?>">
                         <button class="btn btn-danger mt-4">Voir détail</button>
                    </a>
                    <div class="text-right mt-4">
                        <a class="text-danger" href="../MyRecettesMvc/index.php?controller=recette&action=delete&id=<?php echo $rec->getId()?>">
                         Supprimer
                        </a>  ou  
                        <a class="text-danger" href="../MyRecettesMvc/index.php?controller=recette&action=updateForm&id=<?php echo $rec->getId()?>">
                         Modifier
                        </a>
                    </div>
                
                </fieldset>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
    <?php
        include 'parts/bootstrapFile.html';
    ?>
    </body>
</html>