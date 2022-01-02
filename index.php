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

use Mes_Produits\Produit;
include "Produit.php";

$imprimante = new Produit("ordinateur",10,1200,false);


echo $imprimante . "<br>";

echo $imprimante->supprimerProduit(5) . "<br>";
echo $imprimante . "<br>";

echo $imprimante->supprimerProduit(5) . "<br>";
echo $imprimante . "<br>";

echo $imprimante->ajouterProduit(2) . "<br>";
echo $imprimante . "<br>";

?>
</body>
</html>