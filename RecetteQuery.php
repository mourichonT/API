<?php
require_once ("./connexion.php");

//use Connexion\connexion;

// mourichon.needemande.com/API/nesti/recette/:Difficulte
// mourichon.needemande.com/API/nesti/recette/:categories
// mourichon.needemande.com/API/nesti/recette/:temps_preparation
// mourichon.needemande.com/API/nesti/recette/:nombre_personne
// mourichon.needemande.com/API/nesti/recette/:liste_ingredients
// mourichon.needemande.com/API/nesti/recette/:etapes


function getAllRecipies(){
    
    $connexion = new Connexion();

    $pdo= $connexion->getConnexion();


    $query= 'SELECT * FROM `utilisateur`' ;
    $ps = $pdo->prepare($query);
    $ps->execute(); 
    
    
    $user = $ps->fetchAll(PDO::FETCH_ASSOC);
    //$ps->closeCursor();

   // var_dump($user);
   //print_r (sendJSON($user));



    '<br/>'.sendJSON($user);
   //json_encode($user);



    echo'<br/>list de toutes les recettes';
}

function getDifficulties($diffculte){
    $pdo->getConnexion();
    echo 'difficulté';
}

function getCategories($categorieId){
   $pdo->getConnexion();
    echo 'categories';
}

function getPreparationTime($time){
   $pdo->getConnexion();
    echo "temps de preparation";
}

function getPersonPart($part){
   $pdo->getConnexion();
    echo ' nombre de personne';
}

function getIngList($ingId){
   $pdo->getConnexion();
    echo ' liste des ingredients';
}

function getSteps($step){
   $pdo->getConnexion();
    echo "étape de preparation";
}


function sendJSON($info){

    //header ("Access-Control-Allow-Origin : *");
    //header ("Content-type : application/json");
    print_r(json_encode($infos));
    echo "<br/>". json_encode($infos);
}