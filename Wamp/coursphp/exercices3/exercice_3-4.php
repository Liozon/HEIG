<?php
$LISTE_ARTICLE = array("Bouse 87432"=>255,"Xiaomémé hjlk"=>125,"SuFACEBOOK"=>1300,"Piqselle"=>100);
function Ajout_tva($nbr){
    return $nbr+($nbr*(8/100));
}

function nbr_round($nbr){
    return round($nbr,2);
}
?>
<ul>
<?php
foreach($LISTE_ARTICLE as $name=>$price){
    print("<li>$name : ".nbr_round(Ajout_tva($price))."</li>");
}
?>
</ul>