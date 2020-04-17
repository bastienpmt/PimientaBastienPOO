<?php
    class RecetteManager extends DbManager {
        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $recettes = [];
            $sql =  'SELECT * FROM recette ORDER BY description';
            foreach  ($this->bdd->query($sql) as $row) {
                $recettes[] = new Recette($row['id'], $row['titre'], $row['ingredient'], $row['description'], $row['file_name']);
            }

            return $recettes;
        }

        public function insert(Recette $recette)
        {
            $titre = $recette->getTitre();
            $ingredient = $recette->getIngredient();
            $description = $recette->getDescription();
            $file_name = $recette->getFileName();
            $requete = $this->bdd->prepare("INSERT INTO recette (titre, ingredient, description, file_name) VALUES (?,?,?,?)");
            $requete->bindParam(1, $titre);
            $requete->bindParam(2, $ingredient);
            $requete->bindParam(3, $description);
            $requete->bindParam(4, $file_name);
            $requete->execute();
            $recette->setId($this->bdd->lastInsertId());
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM recette where id = ?");
            $requete->bindParam(1,$id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM recette WHERE id=?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $recette = new Recette($res['id'], $res['titre'], $res['ingredient'], $res['description'], $res['file_name'] );

            return $recette;
        }

        public function update(Recette $recette)
        {
            $titre = $recette->getTitre();
            $ingredient = $recette->getIngredient();
            $description = $recette->getDescription();
            $file_name = $recette->getFileName();
            $id = $recette->getId();
            $requete = $this->bdd->prepare("UPDATE  recette SET titre =? , ingredient = ?, description = ?, file_name = ? WHERE id = ?");
            $requete->bindParam(1, $titre);
            $requete->bindParam(2, $ingredient);
            $requete->bindParam(3, $description);
            $requete->bindParam(4, $file_name);
            $requete->bindParam(5, $id);
            $requete->execute();
        }

    }
?>