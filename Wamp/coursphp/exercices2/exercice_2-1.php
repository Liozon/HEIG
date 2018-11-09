<?php
    $valeur_de=0;
    $i=0;
	$min=1;
	$max=6;

    while($valeur_de!=6)
    {
        $i++;
		$valeur_de=rand($min,$max);
		echo "La valeur de ce tir de dé est de " .$valeur_de. "</br>";
    }
	if ($i==1)
	{
		echo " avez réussi à faire 6 en ".$i." essai !";
	}
	else
	{
		echo "Vous avez réussi à faire 6 en ".$i." essais !";
	}
?>