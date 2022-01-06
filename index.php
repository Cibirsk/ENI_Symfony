<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1>Learn Symfony</h1>
<?php

function monAutoLoad($class) {
    include(str_replace("\\", "/", $class). ".php");
}

spl_autoload_register('monAutoLoad');

use MesProduits\Produit;
$ordinateur = new Produit("ordinateur",10,1200,false);
echo $ordinateur . "<br>";
echo $ordinateur->supprimerProduit(5) . "<br>";

use MesProduits\ProduitParLots; 
$cartouchesEncre=new ProduitParLots("Cartouches d'encre",5,50,false); 
$cartouchesEncre->setNbArticlesParLot(10); 
$cartouchesEncre->ajouterProduit(2);
echo $cartouchesEncre . "<br>";

?>
</body>
</html>