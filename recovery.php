<?php
//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'base';
$db_port = 8889;

//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

$my_query= mysqli_query($connection, "SELECT * FROM controlBase ORDER BY id DESC LIMIT 1");

$result= mysqli_fetch_row($my_query);

echo "print the last data:";
    echo "<br>";
echo "id = ".$result[0];
    echo "<br>";
echo "direction is :";
if($result[1]){
    echo $result[1];
}else if($result[2]){
    echo $result[2];
}else if($result[3]){
    echo $result[3];
}else if($result[4]){
    echo $result[4];
}else if($result[5]){
    echo $result[5];
}



?>