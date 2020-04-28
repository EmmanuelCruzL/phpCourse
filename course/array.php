<?php
 $name ='Emmanuel Cruz López';
 $jobs = [
   0 =>'Angular Developer',
   1 =>'DevOps',
   2 =>'Gamer'
 ];
 $names = [
     'Hola',
     'Que Tal',
     'Buenas'
 ];
var_dump($names);

//Arrays
$cars = array("Volvo","BMW","TOYOTA");
echo "<br> I like $cars[0] , $cars[1] , $cars[2] .";
//count indexs
echo "<br>  Count array <br>";
echo count($cars)."<br>";
//Loop Through an Indexed Array
echo "Loop Through an Indexed Array.<br>";
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++){
  echo $cars[$x];
  echo "<br>";
}
//PHP Associative Arrays
$age = array("PETER"=>"35","BEN"=>"37","JOE"=>"43");
$ages['A'] ="35";
$ages['B'] ="37";


echo "Peter is " . $ages['PETER'] . " years old."."<br>";
echo  "Loop Through an Associative Array.<br>";
foreach($age as $x =>$x_value){
  echo "key=.$x ,value= $x_value";
  echo "<br>";
}

//PHP SORTING ARRAYS
echo "sort array in Ascending order.<br>";
sort($cars);
var_dump($cars);
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
var_dump($numbers);
echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
var_dump($age);
?>