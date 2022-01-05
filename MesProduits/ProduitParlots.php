<?php
namespace MesProduits;

class ProduitParLots extends Produit{
    private $nbArticlesParLot;

    function getNbArticlesParLot(){
        return $this->nbArticlesParLot;
    }

    function setNbArticlesParLot($valeur){
        if(!is_integer($valeur)){
            echo "la propriété nbArticlesParLot doit être un entier";
        }else{
            $this->nbArticlesParLot=$valeur;
        }
    }
}




?>