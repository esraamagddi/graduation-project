<?php

$dbHost="localhost";
$dbUser="root";
$dbPass="";
$dbName="grad-project";

try{
    $conn= new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
   // echo "success";
}catch(Exception $e){
    echo $e->getMessage();
    exit();
}
?>