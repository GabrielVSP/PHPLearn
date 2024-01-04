<?php

	echo "<h1>Array Merge - Unir Arrays</h1>";

	$arr1 = ["chave1"=>"Gabriel","chave2"=>"Melk"];
	$arr2 = ["chave3"=>16, "chave4"=>17, "chave1"=>32];
	$result = array_merge($arr1,$arr2);

	print_r($result);

	echo "<h1>Array intersect Key</h1>
		Une dois ou mais arrays e retorna os elementos com chaves iguais <br>";

	print_r(array_intersect_key($arr1, $arr2));
	echo "<h1>Array Map - permite aplicar funções em arrays</h1>";

	$nomes = ["<p>Gabriel</p>", "Melk", "<h1>Leo</h1>"];

	print_r($nomes);

	print_r(array_map("strip_tags", $nomes));

?>