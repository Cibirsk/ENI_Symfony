<?php
namespace MesProduits; //donner le même nom que le dossier parent


class Produit{
    protected $nom = "mon produit";
    protected $quantite = 10;
    protected $prix = 120;
    protected $rupture = false;

    function __construct(string $nom,int $quantite,float $prix,bool $rupture) //construit l'objet avec les valeurs
    {
       $this->nom=$nom; 
       $this->quantite=$quantite;
       $this->prix=$prix;
       $this->$rupture=$rupture;
    }

    function __toString(){ //convertit l'objet en string pour permettre l'affichage
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