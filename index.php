<?php


spl_autoload_register(function($class){
    require_once 'models/'.$class.'.php';
});

define('servername','localhost');
define('bddname','phpdo_2610');
define('username','PHPDO');
define('password','LASTWISH2610');


$dbc = new Db(servername, bddname, username, password);


switch($_GET['action']):

    case 'categoriesList':
        require_once('C:/wamp64/www/EVAL2610-DIE-/controllers/categoriesListController.php');
        break;

    case 'categoryDetail' :
        require_once('C:/wamp64/www/EVAL2610-DIE-/controllers/categoryDetailController.php');
        break;
    
    case 'categoryForm' :
        require_once('C:/wamp64/www/EVAL2610-DIE-/controllers/categoryFormController.php');
        break;
        
    case 'articlesList':
        require_once('C:/wamp64/www/EVAL2610-DIE-/controllers/articlesListController.php');
        break;

    case 'articleDetail' :
        require_once('C:/wamp64/www/EVAL2610-DIE-/controllers/articleDetailController.php');
        break;
    
    case 'articleForm' :
        require_once('C:/wamp64/www/EVAL2610-DIE-/controllers/articleFormController.php');
        break;
    
endswitch;

?>