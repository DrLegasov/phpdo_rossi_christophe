<?php

//1. Je recupère grâce au GET mon ID dans l'url $_GET['id']
if(!empty($_GET['id'])):

    //2.Jappelle la méthode qui va recupèrer ma categorie en BDD
    $oCategory = Category::getCategory($dbc, $_GET['id']);
    

endif;

include('views/categoryDetail.php');