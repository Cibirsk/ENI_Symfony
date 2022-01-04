<?php
namespace MesProduits; //donner le même nom que le dossier parent


class Produit{
    public $nom = "mon produit";
    public $quantite = 10;
    public $prix = 120;
    public $rupture = false;

    function __construct($nom,$quantite,$prix,$rupture)
    {
       $this->nom=$nom; 
       $this->quantite=$quantite;
       $this->prix=$prix;
       $this->$rupture=$rupture;
    }

    function __toString(){
        return "nom: " . $this->nom . "<br>".
                "quantité: " . $this->quantite . "<br>". 
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

?>