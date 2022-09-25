<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>Pápa Lajos Richárd</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">

<body>

  <table class="styled-table">
     <thead>
     <tr>
       <th>Email</th>
       <th>Jelszó</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>katika@gmail.com</td>
       <td>katica85</td>
     </tr>
     <tr>
       <td>arpi40@freemail.hu</td>
       <td>polip</td>
     </tr>
     <tr>
       <td>zsanettka@hotmail.com</td>
       <td>csillag12</td>
     </tr>
     <tr>
       <td>hatizsak@protonmail.com</td>
       <td>tracking</td>
     </tr>
     <tr>
       <td>terpeszterez@citromail.hu </td>
       <td>cukorka</td>
     </tr>
     <tr>
       <td>nagysanyi@gmail.hu </td>
       <td>julcsika</td>
   </tr>
   </tbody>
   </table>


<form id="main" method="post">
   <h2>Login to your account</h2>

   <div class="input-parent">
     <label for="username">Username or Email</label>
     <input type="text" name="username" id="username">
   </div>

   <div class="input-parent">
     <label for="password">Password</label>
     <input type="password" name="password" id="password">
   </div>

   <button type="submit" name="checkdata" value="Submit">Login</button>
 </form>


<?php
include 'databaseConnect.php';
include 'read.php';
include 'unlock.php';
include 'getInputs.php';
include 'userpwCheck.php';
include 'getColor.php';

  // $person kódolt txt sorait tartalmazza
  $person = array();
  $person = readText();
/*
  // $preson array kiiratása test
  echo " <br>Person array kiiratasa soronként<br>";
  for ($i=0; $i < count($person); $i++)
  {
    echo $person[$i];
    echo "<br>";
  }
*/
  // $uperson kódolatlan txt sorait tartalmazza
  $uperson = array();
  $uperson = unlockArray($person);

  // unlocked array kiiratasa test
		/*for ($i=0; $i < count($uperson); $i++)
		{
			echo " <br>$uperson[$i]<br>";
		}*/

    $user = getUsername();
    $pass=getPassword();

    // ha post történik lekéri az inputokat
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['checkdata']))
    {
        checkdata($user,$pass,$uperson);
    }

    // ha nincs semmi az inputba nem hívja meg a függvényeket
    function checkdata($user,$pass,$uperson)
    {
      if ($user != null && $pass != null)
      {
        userpwCheck($user,$pass,$uperson);
      }
    }

    ?>


</body>
</html>
