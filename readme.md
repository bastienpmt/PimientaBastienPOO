Partie théorique: 

1) interface connectInterface{    
function login($user, $password); 
}

2) 
-> construct() = méthode appelée quand on utilise le mot clé new ...(). Utilisé pour construire l'objet !

-> destruct() à l'inverse méthode appelée pour détruire un objet. Elle est appelé automatiquement à la fin d'un script php

-> __get($name) méthode appelée pour accéder à un attribut dont on a pas l'accès (soit en private soir en protected ou qui n'existe pas). get() retraçera tout cet historique.

-> __set($name, $value) méthode appelée quand on essaie d'attribuer une valeur à un attribut dont on a pas l'accès ou qui n'existe pas.

-> __isset($name) permet de voir si une variable est défini ou non.

-> __unset($name) détruit la ou les variables dont le nom a été passé en argument.

3) destruct()

4) La classe abstraite:  

 abstract class Perso {
         // CONTENU DE LA CLASSE 
    } 

5) Public = Le type ou le membre est accessible par tout autre code.
    Private = Le type ou le membre n'est accessible que par du code dans la même classe.
     Protected = La même fonction que private sauf que les classes filles auront accès à l’élément enfant

6)  Une exception sert à gérer les erreurs -> Objet qui contient un message d’erreur.

Une exception peut être lancée ("throw") et attrapée ("catch") dans le PHP. Le code devra être entouré d'un bloc try pour faciliter la saisie d'une exception. Chaque try doit avoir au moins un bloc catch ou finally correspondant.
L'objet lancé doit être une instance de la classe Exception ou d'une sous-classe de la classe Exception. 

7) Va appeler les fonctions correspondantes en fonction de paramètres passés dans l’url, permet de rediriger l'utilisateur selon l'opération démandée.
Il utilise $_GET.

8)Ses avantages: 
Structurer notre projet
Utiliser des standard
Rendre la maintenance facile
Travail à plusieurs
Evolutif
Dissocie le SQL du PHP et du HTML/CSS/J

9) La Séparation des traitements se fait dans dans 3 dossiers : 
-> Le model qui contient nos objets et les traitements BDD
-> La vue qui gère l'affichage
-> Le controller qui traite toutes les données

