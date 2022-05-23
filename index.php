<?php
    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './view/view_all_article.php';

    $article = new Article('', '', '', '');
    $tab = $article->showArticle($bdd);
    foreach($tab as $value){
        echo '
        '.$value->nom_art.'
        '.$value->content_art.'<br/>
        ';
    }
    echo '</ul>
    </body>
    </html>';
?>