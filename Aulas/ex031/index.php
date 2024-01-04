<?php

	class classeConst
	{
		
		const PI = 3.14159;

		function __construct()
		{
			
			echo self::PI;

		}
	}

	new classeConst();
	echo classeConst::PI;

?>