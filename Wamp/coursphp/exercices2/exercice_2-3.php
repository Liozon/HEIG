<?php
	$i=0;
	function NombreFacteur($N) {
  $Count=2;
  $Square=sqrt($N);
  for($I=2; $I<=$Square;$I++) if($N % $I == 0) $Count++;
  return $Count;
}
 
function is_prime($N) {
  return (NombreFacteur($N)==2);
}

	echo "<table border=\"1\">";
	while($i!=200)
	{
		$i++;
		if($i%10==1)
			{
				echo "<tr>";
			}
		if(is_prime($i))
		{
			echo "<td style=\"color:red\">".$i."</td>";
		}
		else
		{
			echo "<td>".$i."</td>";
		}
		if($i%10==0)
			{
				echo "</tr>";
			}
	}
	echo "</table>";
?>