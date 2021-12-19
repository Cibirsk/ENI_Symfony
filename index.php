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

$monInventaire = ["nom"=>"imprimante","quantité"=>10,"prix"=>200,"rupture"=>true];

foreach($monInventaire as $key => $valeur){
    if($key == "rupture" and $valeur == true){
        echo "rupture de stock";
    }else{
        echo $key . ' : ' . $valeur . "<br>" ;
    }
}

?>
</body>
</html>