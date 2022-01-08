<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
    
<style>
table{
    background-color: rgba(167,194,211,255);
    border-radius: 25px;
}
#btn{
    background-color:#6c8693;
    color: white; 
    height: 35px;
    width: 100px;
    border-radius: 25px;
}
#btn1{
    position: relative;
    background-color:#6c8693;
    color: white; 
    height: 35px;
    width: 100px;
    border-radius: 25px;
    right=-30px;
}
    </style>

<p><img src="logo2.png" alt="Animal care" style="float:right;width:220px;height:80px;"></p>
</head>
<body background="pic2.jpg">
    <?php

?>
    <br><br><br><br><br><br><br><br>
    <form>
    <table  align="center" cellspacing="15" > 
    <tr><td align="center" colspan="2"><h1>Registration Form<h1><td></td></tr>

    <tr><td>Name<td><input type="text" name="name"></td></tr>
    <tr><td>Email Address<td><input type="text" name="email" required></td></tr>
    <tr><td>Phone<td><input type="text" name="phone"></td></tr>
    <tr><td>Address<td><input type="text" name="address"></td></tr>
    <tr><td>Password<td><input type="text" id="pass" name="password"></td></tr>

    <tr><td align="center" colspan="2">   
    <input type="submit" id="btn" value="Register"></td></tr>

</table>
</form>

<br><br><br>
<form>
    <table  align="center" cellspacing="15" >
<tr><td align="center" colspan="2">
    <a href="reg_form.php">    
    <input type="button" id="btn1" value="Go Back"></a></td></tr>
    </table>
</form>

</body>
</html>

<?php
$name=$_GET['name'];
$password=$_GET['password'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$address=$_GET['address'];

echo "$name";
echo "$password";
echo "$email";
echo "$phone";
echo "$address";


$query="insert into user_info values('$email', '$name', '$password', '$phone', '$address')";
$data=mysqli_query($conn, $query);

echo "$data";

if($data){
    echo "Data inserted into database.";
    header("Location: login.php");
    die();
   
}

?>