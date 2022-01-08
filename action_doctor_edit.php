
<?php
include_once 'includes.php';
$qr="select * from current;";
$res=mysqli_query($cnn,$qr);
$rr=mysqli_fetch_assoc($res);
$d_mail=$rr['email'];

$qr="select * from doctor_info where d_mail='$d_mail';";
/*$qr = "select pass from doctorlogg where id='$dd';";*/
$res = mysqli_query($cnn, $qr);
$nr = mysqli_num_rows($res);
if($nr==0)
{
    header('location:doc_reg.php');
}

else{

$d_phone=$_POST['d_phone'];
$d_name=$_POST['d_name'];
$address=$_POST['address'];
$area=$_POST['area'];
$hospital_name=$_POST['hospital_name'];

$gender=$_POST['gender'];


$qr="update doctor_info set d_name='$d_name',d_phone='$d_phone',address='$address',area='$area',gender='$gender',hospital_name='$hospital_name' where d_mail='$d_mail';";

$res=mysqli_query($cnn,$qr); 
header('location:doctor.php');
}
?>