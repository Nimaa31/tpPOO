<?php
     /*---------------------------------------
                    IMPORT
    -----------------------------------------*/
    //importer la connexion à la bdd
    include './utils/connectBdd.php';
    //importer le model
    include './model/model_article.php';
    //importer la vue(interface)
    include './view/view_all_article.php';
    /*---------------------------------------
                    LOGIQUE
    -----------------------------------------*/
    //version 1
    showAll($bdd);


