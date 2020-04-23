<?php
//Function 
echo"<h1>Function</h1>";
function writeMsg(){
    echo "Hello World!.<br>";
}
writeMsg();//Call the function
function familyName($fname){//Function with parameters
    echo "$fname Refsnes. <br>";
}
familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kail Jim");
familyName("Borge");
   
 echo   "PHP is a Loosely Typed Language";
     function addNumbers(int $a,int $b){
         return $a +$b;
     }
  echo addNumbers(5,"5days");
  
  
?>