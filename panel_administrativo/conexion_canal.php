<?php

$Localhost = '127.0.0.1';
$Usuario_BD = 'root';
$Password_BD = 'root';
$Nombre_BD = 'canales';

try{
  $DB_con = new PDO("mysql:host={$Localhost};dbname={$Nombre_BD};charset=UTF8",$Usuario_BD,$Password_BD);
  $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
  echo $e->getMessage();
}

?>

