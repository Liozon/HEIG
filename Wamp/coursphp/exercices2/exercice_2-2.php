<?php
	$i=0;	
	echo "<table border=\"1\">";
	while($i!=200)
	{
		$i++;
		if($i%10==1)
		{
			echo "<tr>";
		}
		switch($i)
		{
			case fmod(sqrt($i), 1)==0:
				echo "<td style=\"color:blue;\"><strong>".$i."</strong></td>";
				break;
			case $i%17==0:
				echo "<td style=\"color:red;\">".$i."</td>";
				break;
			default:
				echo "<td>".$i."</td>";
				break;
		}
		if($i%10==0)
		{
			echo "</tr>";
		}
	}
	echo "</table>";
?>