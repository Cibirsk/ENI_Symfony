<?php
namespace MesProduits;

class ProduitParLots extends Produit{
    private $nbArticlesParLot;

    function getNbArticlesParLot(){
        return $this->nbArticlesParLot;
    }

    function setNbArticlesParLot($valeur){
        if(!is_integer($valeur)){
            echo "la propriété nombre d'ArticlesParLot doit être un entier <br>";
        }else{
            $this->nbArticlesParLot=$valeur;
        }
    }

    function ajouterProduit2(){
        $this->quantite+=$this->nbArticlesParLot; 
        if($this->quantite>0) $this->rupture=false;
    }
}




?>