<?php
include("connection.php");
error_reporting(0);
 $id=$_GET['rn'];

 $query="delete from post_table where post_id='$id'";

 $data=mysqli_query($conn, $query);
 if($data){
    echo "<script>alert('Record Deleted From Database')</script>" ;
   }
 else{
    echo "<font color='red'>Failed to Delete Record From Database" ;
 }
?>