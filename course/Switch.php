<?php

$favcolor ="red";
$msg ="Your favorite color is "; 
switch($favcolor){
    case "red" :
        echo $msg."red!";
    break;
    case  "blue" :
        echo $msg."blue!";
    break;
    case "green":
        echo $msg."green!";
    break;
    default : 
  echo  $msg."nether red ,blue, nor green!";
}


?>