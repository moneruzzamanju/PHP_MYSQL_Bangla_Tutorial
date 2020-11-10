<?php


try{
    $connection = new PDO("mysql:host=localhost;dbname=1education_management_system","root","");

    echo "Connection Successfull.";
}catch(PDOException $e){

    echo "Connection Failed.".$e->getMessage();
}

?>