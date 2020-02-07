<?php
//EP VARIABLES
//texto
$txt = "Hello World \n";
echo $txt;
//number
$x = 5;
$y = 10;
echo  $x+$y;

function myTest($x) {
    // using x inside this function will generate an error
    //variables global [global] 
    global $y;
    echo "<p>Variable x inside function is: $x</p>";
    echo "<p>Variable global $y  </p>";
}
myTest(5);

function  gausSum($number){
   $formula =($number*($number+1))/2;
  echo "Sum Result : $formula \n";
}
  gausSum(10);
 
  $Z=300;
  $A=400;

  function  VarGlobal() {
    $GLOBALS['Z'] = $GLOBALS['A'] + $GLOBALS['Z'];
}
  VarGlobal();
echo "\n".$Z;

//PHP THE STATIC KEYWORD
  function staticVar(){
    static $x =0;
    echo $x;
    $x++;
  }
  echo "<p> </p>";
 //GET THE LENGTH OF STRING
 // echo "GET THE LENGTH OF STRING \n ";
  echo  strlen("Hello World! \n");
  //echo "GET THE REVERSE LENGTH OF STRING \n";
  echo  strrev("Hello World! ");
  $var1 ="Hola mundo";
  echo  str_replace("Hola","QueTal","$var1");

?>