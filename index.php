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

// OK //
include "MesProduits/Produit.php";

// OK //
/* 
function monAutoLoad() {
    include "MesProduits/Produit.php";
} 
spl_autoload_register('monAutoload'); 
*/

// ECHEC //
/*
spl_autoload_register(function ($class) {
    include 'MesProduits/' . $class . '.php';
});
*/

// ECHEC //
/*
function monAutoLoad($class) { 
    include  "MesProduits/" . $class . ".php"; 
} 
spl_autoload_register('monAutoload');
*/


use MesProduits\Produit; // nameSpace\class

$ordinateur = new Produit("ordinateur",10,1200,false);


echo $ordinateur . "<br>";

echo $ordinateur->supprimerProduit(5) . "<br>";
echo $ordinateur . "<br>";

echo $ordinateur->supprimerProduit(5) . "<br>";
echo $ordinateur . "<br>";

echo $ordinateur->ajouterProduit(2) . "<br>";
echo $ordinateur . "<br>";

?>
</body>
</html>