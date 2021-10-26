<?php

if(!empty($_GET['id'])):

    $oArticle = Article::getArticle($dbc, $_GET['id']);
    

endif;

include('views/articleDetail.php');