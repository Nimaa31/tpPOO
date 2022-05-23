<?php
    function showAll($bdd){
        try{
            $req = $bdd->prepare('SELECT * FROM article');
            $req->execute();
            while($data = $req->fetch()){
                echo '<p> <a id='.$data['id_art'].'">Nom : '.$data['nom_art'].' content : '.$data['content_art'].'</a></p>';
            }
        }
        catch(Exception $e)
        {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
        }
    }

?>