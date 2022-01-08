<?php
include("connection.php");
error_reporting(0);
 $mail=$_GET['rn'];
 
 $query="delete from user_info where u_mail='$mail'";

 $data=mysqli_query($conn, $query);
 if($data){
   echo "<script>alert('Record Deleted From Database')</script>" ;

 }
 else{
    echo "<font color='red'>Failed to Delete Record From Database" ;
 }
?>
