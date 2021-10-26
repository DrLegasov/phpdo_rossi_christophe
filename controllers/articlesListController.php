<?php


if(!empty($_GET['id'])):
    $oArticle = Article::deleteArticle($dbc, $_GET['id']);
endif;

$articles = Article::getListArticles($dbc);


include('views/articlesList.php');

?>