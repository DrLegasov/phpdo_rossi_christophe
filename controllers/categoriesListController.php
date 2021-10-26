<?php


if(!empty($_GET['id'])):
    $oCategory = Subject::deleteCategory($dbc, $_GET['id']);
endif;

$categories = Category::getListCategories($dbc);


include('views/categoriesList.php');

?>