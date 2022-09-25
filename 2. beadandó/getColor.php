<?php

function getColor($name)
{
  include 'databaseConnect.php';

  $sql ="SELECT Titkos FROM tabla WHERE Username='$name';";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0){
    while ($row = mysqli_fetch_assoc($result))
    {
      echo $row['Titkos']. "<br>";
    }

  }
}

?>
