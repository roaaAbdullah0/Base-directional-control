<?php

//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db ='base';
$db_port = 8889;


//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password,$db_db  );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;



if(isset($_POST['forward'])){

    $my_query = "select * from controlBase WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO controlBase (control_forward) VALUES ('forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['right'])){

    $my_query = "select * from controlBase WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO controlBase (control_right) VALUES ('right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['left'])){

    $my_query = "select * from controlBase WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO controlBase (control_left) VALUES ('left')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['stop'])){

    $my_query = "select * from controlBase WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO controlBase (control_stop) VALUES ('stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['backward'])){

    $my_query = "select * from controlBase WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO controlBase (control_backward) VALUES ('backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}

?>