<?php
//On demarre les sessions
// session_start();
 
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/
try
{
    // initilisation de PDO
    // On stocke la connection à MySQL dans une variable en précisant le type de table, l'hote, le mon de la bdd, le pseudo et mot de passe
// Sous WAMP (Windows)
    $dbc  = new PDO('mysql:host=localhost;dbname=GestionOrganisatio(PHP);charset=utf8', 'jabbar', 'Fooly@1251');
    $dbc->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

}

catch (Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    echo "error".$e->getMessage();
}



 //On se connecte a la base de donnee

//Email du webmaster
$mail_webmaster = 'direction@jenmedias.com';

//Adresse du dossier de la top site
$url_root = 'http://www.jenmedias.com/';

/******************************************************
----------------Configuration Optionelle---------------
******************************************************/

//Nom du fichier de laccueil
$url_home = 'index.php';
 





?>