<?php

$articles = array ("ProduitA","ProduitB","ProduitC","ProduitD","ProduitE");

$taux = array (0.10,0.20,0.30,0.40,0.50);


function prixtaux($n)
{
    global $taux;
    return array("Prix" =>rand(0,100), "Taux" =>$taux[rand(0,count($taux)-1)]);
    
}


$b = array_map('prixtaux', array_fill_keys($articles, 0));
print_r($b);

?>