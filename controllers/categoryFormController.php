<?php
        if(!empty($_POST)){
            if(!empty($_POST['title'])){
                if(!empty($_POST['id'])){
                    Category::updateCategory($dbc, $_POST['id'], $_POST['title'],$_POST['description'],$_POST['picture']);
                } 
        else {
            Category::addCategory($dbc, $_POST['title'],$_POST['description'],$_POST['picture']);
            header('Location:index.php?action=categoriesList');
        }
    }
}


if(!empty($_REQUEST['id'])):

    $oCategory = Category::getCategory($dbc, $_REQUEST['id']);

endif;


include('views/categoryForm.php');