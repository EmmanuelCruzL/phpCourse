<?php declare(strict_types=1);//strict requirement
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
   
 echo   "PHP is a Loosely Typed Language.<br>";
     function addNumbers(int $a,int $b){
         return $a +$b;
     }
  echo addNumbers(5,5);
  
  echo "Use strict .<br>";
  
  function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4)."<br>";
//function with type return
echo "function with type return.<br>";
    function addNumber(float$a , float $b): float{
     return $a +$b;
    }
    echo addNumber(1.2,3.3)."<br>";


  
?>