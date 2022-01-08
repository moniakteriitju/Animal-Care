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
    </style>

</head>
<body background="dFhnNH1.jpg">
<p><img src="logo2.png" alt="Animal care" style="float:right;width:220px;height:80px;"></p>

    <br><br><br><br><br><br>
    <form>
    <table  align="center" cellspacing="15" > 
    <tr><td align="center" colspan="2"><h1>Registration Form<h1><td></td></tr>

        <tr><td>Name<td><input type="text" name="name" ></td></tr>
    <tr><td>Email Address<td><input type="text" name="email" required></td></tr>
    <tr><td>Password<td><input type="text" id="pass" name="password"></td></tr> 

    <tr><td align="center" colspan="2">  
    <input type="submit" id="btn" name="submit" value="Enter"></td></tr>
    <tr><td align="center" colspan="2">
    <a href="admin.php">    
    <input type="button" id="btn" value="Go Back"></a></td></tr>

    </table>
</form>

</body>
</html>

<?php
$name=$_GET['name'];
$password=$_GET['password'];
$email=$_GET['email'];



$query="insert into admin_info values('$email', '$name', '$password')";
$data=mysqli_query($conn, $query);

if($data!=NULL){
     echo "Registration completed";
    }
    ?>
