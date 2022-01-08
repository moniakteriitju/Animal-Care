<html>
<head>
        <style>
            body{
                background-color:white;
                margin: 0;
                 padding: 0;
                
                font-size: larger;
}

a{
  font-size:large;
}

#parent {
  display: flex;
  justify-content: space-around;
}

#left {
    border: 1px solid lightgray;
  background-color:rgb(178, 186, 187);
  background-image: url("pic2.jpg");
  padding:15px;
  width: 75%;
  height:100%;
  text-align:center;
  color:black;
  text-align:center;


}

#right {
    
    border: 1px solid lightgray;
  background-color:rgb(169, 204, 227);
  width: 20%;
  color:black;
  padding:15px;
  height:100%;
  text-align:center;
  text-align:center;

 
  
}
.ff{
  width:75%;
  background-color:darkcyan;
  border-radius:3px;
  text-align:center;
  padding:10px;
  margin:auto;
}
.pn{
    background-color:rgb(212, 230, 241);
}
.pn1{
    background-color:rgb(229, 232, 232);
    border-radius:10px;
    width:50%;
    margin:auto;
    padding:10px;

}
table{
    border:'0';
    width:50%;
    padding:4%;
    
    
}
td,th{
    background-color:none;
    padding:2%;
    border-radius:4px;
    text-align:center;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
img{
    border-radius:100px;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

.eu{
  /*background-color:rgb(169, 223, 191);*/
  padding:5px;
  border-radius:15px;
  width:100%;
}










/*
@media screen and (max-width: 700px) {
  .navbar a {
    float: none;
    display: block;
  }
}*/

  

.navbar img
{

  margin-top: -80px;
  margin-left: 1287px;
}





   
        </style>

        
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="nav_style.css">
    </head>
<body>






<?php
include_once 'includes.php';
include_once ("navigation_bar.php");
$qr="select * from current;";
$res=mysqli_query($cnn,$qr);
$rr=mysqli_fetch_assoc($res);
$d_mail=$rr['email'];


$qr="select * from doctor_info where d_mail='$d_mail';";
/*$qr = "select pass from doctorlogg where id='$dd';";*/
$res = mysqli_query($cnn, $qr);
$nr = mysqli_num_rows($res);
$rr = mysqli_fetch_assoc($res);
//$pictue=$rr['filename'];


$qrr="select * from photos where email='$d_mail';";
$ress=mysqli_query($cnn,$qrr);
$nr = mysqli_num_rows($ress);
//echo $nr;
$rrr=mysqli_fetch_assoc($ress);

/*echo $nr;*/

?>
<div id="parent">
<div id="right">


<div>
  
  <div class="eu">
  <i class="fa fa-pencil"></i>
  <p>Update satus:</p>
<form  method="POST" action="update_status.php">
    <input type="radio" name="as" value="Available" required> Available<br>
   <input type="radio" name="as" value="Not Available"> Not Available<br>
   <input classs="inp" name='submit' type="submit" value="Update">

  </form>
  
</div>
<br><br>
<i class="fa fa-edit fa-2x cust" style="font-size:60px"></i>
<br>

<P align='center'><a href='doctor_profile_edit.php'>Edit Profile</a></a></P>
<br><br>
<i class="fa fa-fw fa-home "style="font-size:60px" ></i><br>
<a href="home.php">Home</a>
<br><br>

<i class="fa fa-fw fa-sign-out "style="font-size:60px" ></i><br>
<a href="index.html">Log out</a>


</div>
<br><br><br><br><br><br><br><br><br><br><br>





</div>
<div id="left">
<p><img src="pic3.png" alt="Anymale care" style="float:right;width:150px;height:100px;"></p>


<table class="center">
<tr>

    <td  colspan="2">
        <?php
        echo '<img src="'.$rrr['filename'].'"height="200" width="200" border-radius="3px" alt="user">';
        ?>
        <br>
        <br>
        <i class="fa fa-pencil"></i>
        <a href="image_upload.php">Edit profile picture</a>
    </td>
</tr>
<?php
echo
"<tr>
    <th>Name :</th>
    
    <td>".$rr['d_name']."</td>
</tr>
<tr>
    <th>E-mail :</th>
    <td>".$rr['d_mail']."</td>
</tr>
<tr>
    <th>Phone :</th>
    <td>".$rr['d_phone']."</td>
</tr>
<tr>
    <th>Address :</th>
    <td>".$rr['address']."</td>
</tr>
<tr>
    <th>Hospital Name :</th>
    <td>".$rr['hospital_name']."</td>
</tr>
<tr>
    <th>Gender :</th>
    <td>".$rr['gender']."</td>
</tr>
<tr>
    <th>Area :</th>
    <td>".$rr['area']."</td>
</tr>
<tr>
    <th>Status :</th>
    <td>".$rr['status']."</td>
</tr>
"
?>
</table>
<br>

</div>




</div>


<?php
/*echo "this is doctor page";*/
?>
</body>
</html>