<html>
<head>


<style>
    .aa{
width:10%;
margin-left:auto;
margin-right:auto;

background-color:rgb(93, 109, 126);
text-align: center;
border-radius:4px;
color:black;
padding:10px;


    }
    .aa:hover{
width:10%;
margin-left:auto;
margin-right:auto;

background-color:white;
text-align: center;
border-radius:4px;
color:black;
padding:10px;


    }


    a{
        text-decoration:none;
        color:black;
        font-weight: bold;
    }

  table{
            background-color:rgb(93, 109, 126);
            border-radius:15px;
            width:50%;
            margin-left:auto;
             margin-right:auto;
            height: 60%;
            padding:20px;
            text-align: left;
            font-weight: bold;
    
  }
.hv{
    background-color:white;
    text-align:center;
    border-radius:1px;
    padding:10px;
    width:100%;
    border:none;
    
}
.hv1{
    background-color:rgb(230, 176, 170);
    text-align:center;
    border-radius:3px;
    padding:10px;
    width:20%;
    border:none;
    font-size: large;
    font-weight: bold;
}

.hv1:hover{
    background-color:white;
    text-align:center;
    border-radius:3px;
    padding:10px;
    width:20%;
    border:none;
}

.hv:hover{
    background-color:rgb(235, 222, 240);
    text-align:center;
    border-radius:1px;
    padding:10px;
    width:100%;
    border:none;
    
}
th,td{
    
    font-size: large;
    font-weight: bold;

}
.img{
    margin:auto;
}

#parent {
  display: flex;
  justify-content: space-around;
}

#left {
    border: 1px solid lightgray;
  /*background-color:rgb(178, 186, 187);*/
  padding:10px;
  width: 80%;
  height:100%;
  text-align:center;
  color:black;
  text-align:center;


}

#right {
    
    border: 1px solid lightgray;
  /*background-color:rgb(253, 237, 236);*/
  width: 20%;
  color:black;
  padding:10px;
  height:100%;
  text-align:center;
  text-align:center;

 
  
}


</style>
</head>
<body background="pic2.jpg">
    <?php

 
?>
<p><img src="pic3.png" alt="Anymale care" style="float:right;width:150px;height:100px;"></p>
<?php
include_once 'includes.php';

$qr="select * from current;";
$res=mysqli_query($cnn,$qr);
$rr=mysqli_fetch_assoc($res);
$d_mail=$rr['email'];


$qr="select * from doctor_info where d_mail='$d_mail';";
$res=mysqli_query($cnn,$qr);
$rr=mysqli_fetch_assoc($res);

$d_mail=$rr['d_mail'];
$d_phone=$rr['d_phone'];
$d_name=$rr['d_name'];
$address=$rr['address'];
$area=$rr['area'];
$hospital_name=$rr['hospital_name'];

$gender=$rr['gender'];



?>

<div id="parent">
    <div id="right">
        <br><br><br><br><br>
    <p><img src="pic5.png" alt="Anymale care" style="float:left;width:200px;height:200px;"></p>
        </div>
        <div id="left">
       
<form method="POST" action="action_doctor_edit.php">
<table border="0" align="center" cellpadding="10">
        <tr><td><label for="d_name">Name:</label></td>
       <td><input class="hv" type="text" id="d_name" value=<?php echo $d_name?> name="d_name"></td> </tr>
        <tr><td><label for="d_phone"> Phone:</label></td>
        <td><input class="hv" type="text" id="d_phone"value=<?php echo $d_phone?> name="d_phone"></td></tr>
        <tr><td><label for="address">Address:</label></td>
        <td><input class="hv" type="text"  id="address"value=<?php echo $address?> name="address"></td></tr>
        <tr><td><label for="area">Area:</label></td>
        <td><input class="hv" type="text" id="area" value=<?php echo $area?> name="area"></td></tr>
        <tr><td><label for="gender"> Gender:</label></td>
        <td><input class="hv" type="text" id="gender"value=<?php echo $gender?> name="gender"></td></tr>
        <tr><td><label for="hospital_name">Hospital name:</label></td>
       <td><input class="hv" type="text" id="hospital_name"value=<?php echo $hospital_name?> name="hospital_name"></td> </tr>
        
        
       <tr><td colspan="2" align="center"><input class="hv1" type="submit" value="update"> </td></tr> 
        
        </table> 
        
        </form>
        <div class="aa"> <a href="doctor.php">Go back</a></div>
        </div>
        
</div> 

</body>

</html>


