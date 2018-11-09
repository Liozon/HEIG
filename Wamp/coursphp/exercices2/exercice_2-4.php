<?php
	
	$text_a="A";
	$text_b="BB";
	
	function sandwich($a, $b)
	{
		$c=$a." - ".$b." - ".$a;
		return $c;
	}
	
	echo sandwich(sandwich(sandwich($text_a, $text_b),sandwich($text_a, $text_b)),sandwich(sandwich($text_a, $text_b),sandwich($text_a, $text_b)))."<br/>";
	
	echo sandwich(sandwich(sandwich(sandwich($text_a, $text_b),sandwich($text_a, $text_b)),sandwich(sandwich($text_a, $text_b),sandwich($text_a, $text_b))),sandwich(sandwich(sandwich($text_a, $text_b),sandwich($text_a, $text_b)),sandwich(sandwich($text_a, $text_b),sandwich($text_a, $text_b))));
	echo "<br/>";
?>