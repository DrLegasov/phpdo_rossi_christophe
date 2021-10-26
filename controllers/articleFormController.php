<?php
        if(!empty($_POST)){
            if(!empty($_POST['title'])){
                if(!empty($_POST['id'])){
                    Article::updateArticle($dbc, $_POST['id'], $_POST['title'],$_POST['description'],$_POST['picture'], $_POST['price']);
                } 
        else {
            Article::addArticle($dbc, $_POST['title'],$_POST['description'],$_POST['picture'], $_POST['price']);
            header('Location:index.php?action=articlesList');
        }
    }
}


if(!empty($_REQUEST['id'])):

    $oArticle = Article::getArticle($dbc, $_REQUEST['id']);

endif;


include('views/articleForm.php');