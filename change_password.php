<?php
include("connection.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html>

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
<head>
	<title>Change Password</title>
</head>
<body background="dFhnNH1.jpg">
<p><img src="logo2.png" alt="Animal care" style="float:right;width:220px;height:80px;"></p>
    <br><br><br><br><br><br><br><br><br>
	 <form action="" method="POST">
    <table  align="center" cellspacing="15" > 
    <tr>
		<td>Email</td>
		<td><input type="text" value="" name="mail" required></td>
	</tr>

	<tr>
		<td>New Password</td>
		<td><input type="text" value="" name="pass" required></td>
	</tr>

	<tr>
		<td colspan="2" align="center"><input type="submit"  name="submit" value="Update Password"></td>
	</tr>
       

</table>
</form>
</body>
</html>

<?php

if($_POST['submit']){
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];
	

$query= "UPDATE admin_info set a_pass='$pass' where a_mail='$mail'";

$data= mysqli_query($conn, $query);

if($data){
	echo "<script>alert('Password changed')</script>" ;
}
else{
	echo "Faled to Update Password";
}

}


?>
