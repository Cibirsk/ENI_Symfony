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

class Produit{
    public $nom = "mon produit";
    public $quantite = 10;
    public $prix = 120;
    public $rupture = false;

    function __toString(){
        return "nom: " . $this->nom . "<br>".
                "quantité :" . $this->quantite . "<br>". 
                "prix: " . $this->prix . "<br>". 
                (($this->rupture)? "rupture de stock <br>" : "en stock <br>");
    }

    function ajouterProduit($quantite){
        $this->quantite+=$quantite;
        if($this->quantite >=0){
            $this->rupture = false;
        }
        return "un nouveau produit a été ajouté <br>" . 
                "il en reste " . $this->quantite . " en stock <br>";
    }

    function supprimerProduit($quantite){
        $this->quantite-=$quantite;
        if($this->quantite <=0){
            $this->rupture = true;
        }
        return "un produit a été supprimé <br>" . 
                "il en reste " . $this->quantite . " en stock <br>";
    }
}

$imprimante = new Produit;
$imprimante->nom = "imprimante";
$imprimante->prix = 800;
$imprimante->quantite = 20;
$imprimante->rupture = false;


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