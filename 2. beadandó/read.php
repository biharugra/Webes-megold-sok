<?php

function readText(){

  $person = array();

  $fp = fopen('password.txt', 'r');
	if (!$fp)
	{
    echo 'Could not open file somefile.txt';
	}

	$counter = 0;
	$ctemp ="";

  while (false !== ($char = fgetc($fp)))
	{
		// sorvege
		if( bin2hex($char) == '0a')
		{
			//echo $ctemp;
			$person[$counter] = $ctemp;
			/*
			echo "<br>";
			echo 'sorvege'.$counter.$person[$counter]."\n";*/

			$counter++;
			$ctemp ="";
		}else{

			$ctemp .= chr(ord($char));
			//echo $ctemp;
		}
	}

return $person;
}



 ?>
