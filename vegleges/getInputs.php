<?php

function getUsername()
{
  if(isset($_POST['username'])){
	  $user=$_POST["username"];
	  return $user;
  }else{
	  $user=null;
  }
}

function getPassword()
{
  
  if(isset($_POST['password'])){
	  $pw=$_POST["password"];
	  return $pw;
  }else{
	  $pw=null;
  }
}

?>
