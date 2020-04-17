<div class="background">
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
        $recetteController = new DefaultController();
        $recetteController->home();
    }
    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'addForm'){
        $recetteController = new RecetteController();
        $recetteController->addForm();
    }
    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'addRecette'){
        $recetteController = new RecetteController();
        $recetteController->persistForm();
    }
    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $recetteController = new RecetteController();
        $recetteController->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $recetteController = new RecetteController();
        $recetteController->updateForm($_GET['id']);
    }
    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'displayForm' && isset($_GET['id'])){
        $recetteController = new RecetteController();
        $recetteController->displayForm($_GET['id']);
    }
    else if($_GET['controller'] === 'recette' && $_GET['action'] === 'updateRecette' && isset($_GET['id'])){
        $recetteController = new RecetteController();
        $recetteController->updateRecette($_GET['id']);
    }
    else {
        throw new Exception('La page demandée n\'existe pas', 404);
    }
?>
</div> 