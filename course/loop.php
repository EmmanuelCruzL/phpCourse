<?php
//loop while
echo "LOOP WHILE <br>";
$x =1;
while($x <=5){//condition
    echo " The number is: $x <br>";
    $x++;
}
$x=1;
//loop do while
echo "LOOP DO WHILE <br>";
do{
    echo " The number is: $x <br>";
    $x++;
} while($x <=5);
//FOR LOOP
  echo "FOR LOOP <br>";
  for($n=0;$n <=10; $n++){
      echo " The number is: $n <br>";
  }
 //FOREACH LOOP
 echo "FOREACH LOOP <br>";
 $colors = array("red","green","blue","yellow");
 foreach($colors as $value){
     echo "$value <br>";
 }
 
 $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
 



?>