<?php

$articles = array ("ProduitA","ProduitB","ProduitC","ProduitD","ProduitE");

$taux = array (0.10,0.20,0.30,0.40,0.50);


function prixtaux($n)
{
    global $taux;
    return array("Prix" =>rand(0,100), "Taux" =>$taux[rand(0,count($taux)-1)]);
    
}


$b = array_map('prixtaux', array_fill_keys($articles, 0));
//print_r($b);

echo "<table class=".'table'.">
<thead>
<tr>
<th scope=".'col'.">Article</th>
<th scope=".'col'.">Prix</th>
<th scope=".'col'.">Taux TVA</th>
<th scope=".'col'.">Coût HT</th>
<th scope=".'col'.">Coût TTC</th>
</tr>
</thead>
<tbody>";
    
foreach ($b as $key => $ligne){
  echo " <tr>
    <th scope=".'row'.">".$key."</th>
    <td>".$ligne["Prix"]."</td>
    <td>".$ligne["Taux"]."</td>
    <td>".$ligne["Prix"]."</td>
    <td>".($ligne["Prix"]+$ligne["Prix"]*$ligne["Taux"])."</td>
    </tr>";
}

echo" </tbody> </table>";
?>