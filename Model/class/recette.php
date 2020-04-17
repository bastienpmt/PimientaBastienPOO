<?php
    class Recette{
        private $id;
        private $titre;
        private $ingredient;
        private $description;
        private $file_name;

        public function __construct($id = null, $titre, $ingredient, $description, $file_name)
        {
            $this->id = $id;
            $this->titre = $titre;
            $this->ingredient = $ingredient;
            $this->description = $description;
            $this->file_name = $file_name;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function getTitre()
        {
            return $this->titre;
        }

        public function setTitre($titre)
        {
            $this->titre = $titre;
        }

        public function getIngredient()
        {
            return $this->ingredient;
        }

        public function setIngredient($ingredient)
        {
            $this->ingredient = $ingredient;
        }

        public function getDescription()
        {
            return $this->description;
        }

        public function setDescription($description)
        {
            $this->description = $description;
        }

        public function getFileName()
        {
            return $this->file_name;
        }

        public function setFileName($file_name)
        {
            $this->file_name = $file_name;
        }
    }
?>