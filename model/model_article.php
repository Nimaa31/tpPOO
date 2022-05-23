<?php
    class Article{
        // Atributs
        protected $id_art;
        protected $nom_art;
        protected $content_art;

        // Constructeur
        public function __construct($nom, $content)
        {
            $this->nom_art = $nom;
            $this->content_art = $content;

        }
        // Getter and setter
        public function getIdArt():int{
            return $this -> id_art;
        }
        public function getnomArt():string{
            return $this -> nom_art; 
        }
        public function getContentArt():string{
            return $this -> content_art;
        }
        //afficher tous les articles
        public function showArticle($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM article');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }  
    }     
?>