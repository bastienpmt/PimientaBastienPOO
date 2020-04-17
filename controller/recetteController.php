<?php
class RecetteController{

    public function addForm()
    {
        require 'view/insert_form.php';
    }

    public function persistForm()
    {
    
        $file_name ='';
        $file_name = uniqid().'.'.explode('/', $_FILES['image']['type'])[1];
  
        var_dump($file_name);
        var_dump($_FILES);

        move_uploaded_file($_FILES['image']['tmp_name'], 'assets/uploads/'.$file_name);

        $recette = new Recette(null, $_POST['titre'], $_POST['ingredient'], $_POST['description'], $file_name);
        $recetteManager = new RecetteManager();
        $recetteManager->insert($recette);
        header('Location: /POO/MVC/MyRecettesMvc/index.php?controller=default&action=home');
        return $file_name;
    }

    public function delete($id)
    {
        $recetteManager = new RecetteManager();
        $recetteManager->delete($id);
        header('Location: /POO/MVC/MyRecettesMvc/index.php?controller=default&action=home');
    }

    public function updateForm($id)
    {
        $recetteManager = new RecetteManager();
        $recette = $recetteManager->select($id);

        require 'View/update_form.php';
    }
    public function displayForm($id)
    {
        $recetteManager = new RecetteManager();
        $recette = $recetteManager->select($id);

        require 'View/detail_view.php';
    }

    public function updaterecette($id)
    {   
        $file_name ='';
        $file_name = uniqid().'.'.explode('/', $_FILES['image']['type'])[1];
  
        var_dump($file_name);
        var_dump($_FILES);
        move_uploaded_file($_FILES['image']['tmp_name'], 'assets/uploads/'.$file_name);
        
        $recetteManager = new RecetteManager();
        $recette = $recetteManager->select($id);
        $recette = new Recette($id, $_POST['titre'], $_POST['ingredient'], $_POST['description'], $file_name);
        $recetteManager->update($recette);

        header('Location: /POO/MVC/MyRecettesMvc/index.php?controller=default&action=home');
    }
}
