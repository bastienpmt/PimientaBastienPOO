<?php
    class DbManager{

        protected $bdd;

        public function __construct()
        {
            try {
                $this->bdd = new PDO('mysql:host=localhost; dbname=myrecettesmvc', 'root', '');
                $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $e) {
                die('Erreur '.$e->getMessage());
            }
        }
    }
?>