<?php
// Auteur: Julien Muggli

for ($i = 1; $i <= 300; $i++) {
    	if(($i % 3 == 0 || $i % 7 == 0) && ($i % 2 != 0)){
    		echo $i;
            echo '<br>';
    	}
	}
?>