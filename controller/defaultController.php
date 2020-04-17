<?php
class DefaultController{

    public function home()
    {
        $recetteManager = new RecetteManager();
        $recettes = $recetteManager->selectAll();
        require 'view/home_view.php';
    }
}