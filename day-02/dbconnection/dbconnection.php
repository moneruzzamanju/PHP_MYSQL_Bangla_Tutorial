<?php
class Dbconnection{
    protected $db;
    public function __construct(){
        try{
            $this->db = new PDO("mysql:host=localhost;dbname=education_management_system", "root","");
            echo"Connection successfull"; 

        }catch(PDOException $e){
            echo"Connection Failed".$e->getMessage(); 
        }
    }
}
?>