<?php
$servername = 'localhost';
$username = 'PHPDO';
$password = 'LASTWISH2610';
$bddname = 'phpdo_2610';

try { 
    $dbc = new PDO("mysql:host=$servername;dbname=$bddname",$username,$password);

    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Connection Complete keep HOPE';
}
catch(PDOException $e){
    echo "Erreur de connexion à la base de données";
}