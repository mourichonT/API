<?php
require_once("./RecetteQuery.php");
// mourichon.needemande.com/API/nesti/
// Array ( [0] => nesti ) 

// mourichon.needemande.com/API/nesti/recette/
// Array ( [0] => nesti [1] => recette ) 

// mourichon.needemande.com/API/nesti/recette/:difficulte
// Array ( [0] => nesti [1] => recette [2] => difficulte ) 

// mourichon.needemande.com/API/nesti/recette/:categories
// mourichon.needemande.com/API/nesti/recette/:temps_preparation
// mourichon.needemande.com/API/nesti/recette/:nombre_personne
// mourichon.needemande.com/API/nesti/recette/:liste_ingredients
// mourichon.needemande.com/API/nesti/recette/:etapes


getAllRecipies();
// try {
    
//     if(!empty($_GET['demande'])){
//         $url = explode("/", filter_var($_GET['demande'], FILTER_SANITIZE_URL));
        
//        if ($url[0]==='nesti'){
//             if ($url[1]==='recette' && empty($url[2])){
//                 getAllRecipies();
//             } 
//             else if ($url[1]==='recette' && !empty($url[2])){
//                 echo 'test condition';
//                 switch ($url[2]){
//                    case 'difficulte':
                   
//                     getDifficulties($url[2]);
//                     break;

//                     case 'categorie':
//                         getCategories($url[2]);
//                         break;

//                     case 'temps_preparation':
//                         getPreparationTime($url[2]);
//                         break;

//                     case 'nombre_presonne':
//                         getPersonPart($url[2]);
//                         break;

//                     case 'liste_ingredient':
//                         getIngList($url[2]);
//                         break;

//                     case 'etape':
//                         getSteps($url[2]);
//                         break;
//                     default :
//                         throw new Exception("le parametre [2] est mal renseigné");
//                }
//             }else {
//                 throw new Exception("La requete [1] n'est pas definit comme un paramatre valide"); 
//             }
//         }else {
//             throw new Exception("La requete [0] n'est definit pas comme un parametre valide");
//         }
//     } else {
//         throw new Exception("Problème lors de la transmission des données");    
//     } 
// }catch(Exception $e){
//     echo "test";
//         $erreur = [
//             "message" => $e->getMessage(),
//             "code" => $e->getCode(),
//         ];
//     print_r($erreur);
//     }
