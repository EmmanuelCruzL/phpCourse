<?php
$SERVER = "localhost";
$USER  ="ema";
$PASSWORD = "KILLERDEADKILLER";
$DBNAME ="course";



$conn =new mysqli($SERVER,$USER,$PASSWORD,$DBNAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql ='select * FROM card_info ';
$res = mysqli_query($conn, $sql);


if(mysqli_num_rows($res) > 0){
    echo "<table><tr><th>id</th><th>title</th><th>description</th></tr>";
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr><td>".$row["id"]."</td><td>".$row["title"]." ".$row["description"]."</td></tr>";
        $id =array($row["id"]); 
    }
    echo "</table>";
}else{
    echo "0 result";
}
$conn ->close();
var_dump($id);
?>