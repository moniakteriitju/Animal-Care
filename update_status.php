<?php
include_once 'includes.php';
$qr="select * from current;";
$res=mysqli_query($cnn,$qr);
$rr=mysqli_fetch_assoc($res);
$d_mail=$rr['email'];
$st=$_POST['as'];

/*echo $st;*/

$qr="update doctor_info set status='$st' where d_mail='$d_mail';";

$res=mysqli_query($cnn,$qr); 
header('location:doctor.php');
?>