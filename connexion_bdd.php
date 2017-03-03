<?php
try
{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root', $pdo_options) or die(print_r($bdd->errorInfo()));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
