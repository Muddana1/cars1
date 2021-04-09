<?php

function get_carmodel($name)
{
	$carname = [
		"bmw"=>34,
		"audi"=>2,
		"benz"=>3		
	];
	
	foreach($carname as $carname=>$carmodel)
	{
		if($carname==$name)
		{
			return $carmodel;
			break;
		}
	}
}

?>
