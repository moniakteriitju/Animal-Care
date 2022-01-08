
<?php 
    include_once ("navigation_bar2.php");
?> 
<?php
    $con= new mysqli ("localhost", "root","","final_project");
?>


<?php

    $nm = isset($_GET['nm']) ? $_GET['nm'] : '';
    $ad = isset($_GET['ad']) ? $_GET['ad'] : '';
    $em = isset($_GET['em']) ? $_GET['em'] : '';
    $ph = isset($_GET['ph']) ? $_GET['ph'] : '';
    $pass = isset($_GET['pass']) ? $_GET['pass'] : '';
  //  echo  $nm,$ad,$em,$ph;

 
?>



<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
  <style>

body{
  /* background-image: linear-gradient(  #2c3e50  ,#d5d8dc,#2c3e50 );
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100vh; */
        
       background-image: linear-gradient(rgba(25, 44, 42, 0.3),rgba(33, 168, 168, 0.3)),url('up2.png');
       background-repeat: no-repeat;
       height:100vh;
       background-size: 100% 100%;
}
*{
  font-family: "Cantora One";
  box-sizing: border-box;
}


.contact-form
{

 
  
  padding: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  /* background: #e07a5f; */
  border: 2px solid #0077b6;
    width: 550px;
    height: 700px;
    /* box-shadow: 0 0 10px 0 #dc2f02; */
    /* border-radius: 20px; */
    margin-left:-300px;


}
.contact-form input[type="text"],.contact-form input[type="email"]
{
  
  
  text-align: center;
  border:2px solid #0077b6;
  width: 300px;
  height: 40px;
  color: black;
  transition: 0.25s;
  background-color:#caf0f8;
    padding: 8px;
    border-radius: 10px;
    display: block;
    text-align: center;
  
 }
.contact-form input[type="text"]:focus,.contact-form input[type="password"]:focus,.contact-form input[type="email"]:focus{
  
  background-color: #dbe7e4;
  width:312px;
    
}

.contact-form label {
  color:#012a4a;
  font-size: 18px;
  padding: 1px;
}

table {
  border-collapse: separate;
  border-spacing: 0 15px;
  display: block;
}

td {
  width: 150px;
  text-align: center;
  padding: 5px;
}

.contact-form button[type="submit"]{

background:#FFEBCD;
display: block;
text-align: center;
border:4px solid  #0077b6 ;
outline: none;
border-radius: 2px;
transition: 0.25s;
padding: 7px 8px;
color: white;
margin-left: 230px;
background-color:  #0077b6;
width: 70px;
font-weight: bold;



}
.contact-form button[type="submit"]:hover{
opacity: .7;
}



.contact-form h2 {
text-align:center;
margin-bottom: 20px;
color:  #0077b6;
}


 /*.imge
 {
  margin-top: -150px;
  margin-left: 400px;
 }
.imge img
{
    color: blue;
    height: 300px;
    width: 300px;
}*/

</style>


</head>
<body>
 
 <form action="" method="POST" class="contact-form" style="  width: 520px; height: 453px;">
   <h2>Update</h2>
    
    <table>
      <tr>
      <td> <label>Name</label></td>
      <td><input type="text" name="nm" value="<?php echo $nm?> " required></td>
      </tr>

      <tr>
       <td><label>Address</label></td>
       <td><input type="text" name="ad" value="<?php echo $ad?>" required></td>
     </tr>

     <tr>
      <td><label>Email</label></td>
      <td><input type="text" name="em" value="<?php echo $em?> " required></td>
     </tr>

     <tr>
     <td><label>Phone</label></td>
     <td> <input type="text" name="ph" value="<?php echo $ph?>"  required></td>
     </tr>

     <tr>
     <td><label>Password</label></td>
     <td> <input type="text" name="pass" value="<?php echo $pass?>"  required></td>
     </tr>
  
   </table>

   <br>
 
   <button type="submit" name="submit">Update</button>

 <!-- <div class="imge"><img src="upic2.png"></div> -->
 </form>



</body>
</html>




<?php
   
       
  
   $con= new mysqli ("localhost", "root","","final_project");
   
    
    if(Isset($_POST['submit']))
    {
      

   
    $ad = isset($_POST['ad']) ? $_POST['ad'] : '';
    $ph = isset($_POST['ph']) ? $_POST['ph'] : '';
    $nm = isset($_POST['nm']) ? $_POST['nm'] : '';
    $em = isset($_POST['em']) ? $_POST['em'] : '';

    //echo  $nm,$ad,$em,$ph;
    
 
    
       $query= "UPDATE user_info SET u_name='$nm' , u_address='$ad',u_mail='$em', u_phone='$ph'  WHERE u_mail='$em';" ;

      // echo $query;
    
       $data=mysqli_query($con,$query);
     
       if($data)
       {   

        header("location:user_priofile.php");
       }
       else
        echo "not Updated";

    
    

   }
  
?>  