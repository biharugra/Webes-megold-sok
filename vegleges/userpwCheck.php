<?php
// userpw check func
function userpwCheck($user, $pass, $uperson){

  $star = '*';
  $userexist = 0;
  $passexist = 0;

  for ($i=0; $i < count($uperson); $i++) {

    //user
    $starpos = stripos($uperson[$i], $star);
    $subuser = substr($uperson[$i], 0, $starpos);

    //pass
    $starpos2 = stripos($uperson[$i], $star);
    $subpass = substr($uperson[$i], $starpos2+1, strlen($uperson[$i]));

    if($user == $subuser) $userexist++;
    if($pass == $subpass) $passexist++;

    // check
    if ( $user == $subuser && $pass == $subpass)
    {
     $color = getColor($user);
      //echo '<br>';
 //     echo ' <div class="result-container"><div class="result"> A felhasználó szine:'.$color.'</div></div>';
    }else{

      if($i == count($uperson)-1)
      {
        //echo " <br> vlmi rosz <br>";
        if ($userexist == 0)
        {
          echo ' <div class="result-container"><div class="result"> Nincs ilyen felhasználó </div></div>';
        }
          else if ($passexist == 0) {
                echo '<br>';
                echo ' <div class="result-container"><div class="result"> Hibás jelszó </div></div>';
            }
        /*sleep(3);
        header("Location: https://www.google.com/?hl=hu");*/
        //header("Location: http://www.police.hu/");
      }
    }
  }
}

 ?>
