<?php

	$list = ["Gabriel", "Leo", "Melk", "Filipi"];

	echo "<h1>For each</h1>";

	foreach ($list as $i => $value) {
		
		echo "$i  $value";
		echo "<br>";

	}

	echo "<h1>Count e For</h1>";

	$tot = count($list);

	for ($i=0; $i < $tot; $i++) { 
		
		echo $list[$i] . "<br>";

	}

?>