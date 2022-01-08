<?php
$servername="localhost";
$username="root";
$password="";
$dbname="final_project"; 
 
$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
  // echo "connection ok";
}
else{
    echo "Connection Failed ".mysqli_connect_error();
}

?>