<?php

$hostname = 'mysqldb';
$db_name = 'becode';
$port = '3306';
$username = 'root';
$password = 'root';

$db_set= "mysql:host=$hostname;port=$port;dbname=$db_name;charset=utf8";

try
    {
       $bdd = new PDO($db_set, $username, $password);
       //echo 'Connection established';
    }
      catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }


?>