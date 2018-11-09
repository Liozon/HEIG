<?php
    $valeur_de=0;
    $i=0;
	$min=1;
	$max=6;
	
	
	echo "<h2>Version 1</h2>";
	echo "Valeur des tirs : <br/><table border=\"1px\" style=\"text-align:center;\">";
	echo "<th>Essai N°</th><th>Résultat</th>";
    while($valeur_de!=6)
    {
        $i++;
		echo "<tr><td>".$i."</td>";
		$valeur_de=rand($min,$max);
		echo "<td>".$valeur_de."</td></tr>";
    }
	echo "</table>";
	
	$valeur_de_1=0;
	$valeur_de_2=0;
	$j=0;
	echo "<h2>Version 2</h2>";
	echo "<p>La plus grande valeur est en gras. En cas d'égalité, les deux sont en bleu. Si vous êtes le gagnant et faites 6, il apparaîtra en rouge.</p>";
	echo "Valeur des tirs : <br/><table border=\"1px\" style=\"text-align:center;\">";
	echo "<th>Essai N°</th><th>Player 1</th><th>Player 2</th>";
    while($valeur_de_1!=6 AND $valeur_de_2!=6)
    {
        $j++;
		echo "<tr><td>".$j."</td>";
		$valeur_de_1=rand($min,$max);
		$valeur_de_2=rand($min, $max);
		if($valeur_de_1==6 OR $valeur_de_2==6)
		{
			if($valeur_de_1==6 AND $valeur_de_2==6)
			{
				echo "<td style=\"color:red;\">".$valeur_de_1."</td><td style=\"color:red;\">".$valeur_de_2."</td></tr>";
			}
			else
			{
				if($valeur_de_1==6)
				{
					echo "<td style=\"color:red;\">".$valeur_de_1."</td><td >".$valeur_de_2."</td></tr>";
				}
				else
				{
					echo "<td >".$valeur_de_1."</td><td style=\"color:red;\">".$valeur_de_2."</td></tr>";
				}
			}
		}
		else
			{
			if($valeur_de_1>$valeur_de_2)
			{
				echo "<td style=\"font-weight:bold;\">".$valeur_de_1."</td><td>".$valeur_de_2."</td></tr>";
			}
			else
			{
				if($valeur_de_1==$valeur_de_2)
				{				
					echo "<td style=\"color:blue;\">".$valeur_de_1."</td><td style=\"color:blue;\">".$valeur_de_2."</td></tr>";
				}
				else
				{
					echo "<td>".$valeur_de_1."</td><td style=\"font-weight:bold;\">".$valeur_de_2."</td></tr>";
				}
			}
		}
    }
	echo "</table>";
?>