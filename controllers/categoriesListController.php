<?php


if(!empty($_GET['id'])):
    $oCategory = Category::deleteCategory($dbc, $_GET['id']);
endif;

$categories = Category::getListCategories($dbc);


include('views/categoriesList.php');

?>