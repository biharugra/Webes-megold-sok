<?php

function unlock($x){

  $yo ="";
  $temp ="";
  $chartemp="";
  $ukey = array(0 => -5, 1 => 14, 2 => -31, 3 => 9, 4=> -3);
  $keycounter=0;

  for ($i=0; $i < strlen($x); $i++) {

    $chartemp = $x[$i];
    $temp = ord($chartemp);
    $temp += $ukey[$keycounter];
    $yo .= chr($temp);
    $keycounter++;

    if ($keycounter == 5) $keycounter -= 5;
  }

  return $yo;
}

function unlockArray($person){
  // unlockolt sorok arraybe írása
		$uperson = array();
		for ($i=0; $i < count($person); $i++) {

			$uperson[$i] = unlock($person[$i]);
		}

    return $uperson;
}
 ?>
