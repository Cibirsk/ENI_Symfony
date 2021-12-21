<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1>Ma page Symfony</h1>
<?php

$ordinateur = ["marque"=>"apple","quantité"=>"12","prix"=>1200];

function affiche_produit($produit){
    $retour = "";
    foreach($produit as $key=>$valeur){
        $retour .= $key . " : " . $valeur . "<br>";
    }
    return $retour;
}
//echo affiche_produit($ordinateur);

class Produit{

}


?>
</body>
</html>