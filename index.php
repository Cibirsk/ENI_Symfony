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
    public $nom = "mon produit";
    public $quantite = 10;
    public $prix = 120;
    public $rupture = false;
    public $quality = "";

    function afficherProduit(){
        return "affichage du produit";
    }
    function ajouterProduit(){
        return "un nouveau produit a été ajouté";
    }
    function supprimerProduit(){
        return "un produit a été supprimé";
    }
    function ajouterPanier($total){
        return "vous avez " . $total . " dans votre panier";
    }
}

$imprimante = new Produit;
$imprimante->nom = "imprimante";
$imprimante->prix = 700;
$imprimante->quantite = 20;
$imprimante->rupture = false;
$imprimante->quality = "bonne";

echo "nom du produit: " . $imprimante->nom . "<br>";
echo "quantité: " . $imprimante->quantite . "<br>";
echo "prix: " . $imprimante->prix . "<br>";
echo ($imprimante->rupture)? "rupture de stock<br>":"en stock<br>";

echo $imprimante->afficherProduit() . "<br>";
echo $imprimante->ajouterProduit() . "<br>";
echo $imprimante->supprimerProduit() . "<br>";
echo "niveau de qualité: " . $imprimante->quality . "<br>";
echo $imprimante->ajouterPanier(22) . "<br>";

?>
</body>
</html>