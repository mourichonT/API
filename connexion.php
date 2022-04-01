<?php

class Connexion {

    private $username = 'c68mourichon';
    private $password = '959pozeGt';
    private $dns = 'mysql:host=localhost; dbname=c68mourichon; charset=utf8';

    public function __construct (){
    }

    function getConnexion(){
       
    try{
        $con = new PDO($this->dns, $this->username,$this->password);
        echo ('connexion reussi <br/>');
        return $con;

    }catch(PDOException $e){
            echo 'impossible de ce connecter au server'."<br/>";
            die("Erreur !:" .$e->getMessage() . "<br/>");
   
        }
    }


// private $servername ='localhost';
// private $username ='c68mourichon';
// private $password = '959pozeGt';
// private $dbname ='c68mourichon';


// // creat connexion
// function getConnexion(){

// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }

// }





}