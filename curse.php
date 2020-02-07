<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 
<?php

 $array  = array(1,2,3,4,5);
 echo '<div class="card-deck">';
foreach ($array as $valor){
  
    echo '  <div class="card" >';
    echo '  <img src="https://i1.wp.com/evilnapsis.com/wp-content/uploads/2015/08/dev-1.jpg?resize=644%2C362" class="card-img-top" alt="...">';
    echo '  <div class="card-body">';
    echo '  <h5 class="card-title">'.$valor.'</h5> ';
    echo '  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>   ';
    echo '  <a href="#" class="btn btn-primary">Go somewhere</a>       ';
    echo '  </div>';
    echo '  </div> ';


    
}
echo ' </div>';

?>
      


 
 
  
    
   
  
  



