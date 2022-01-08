
<?php 
include_once ("navigation_bar.php");
?>



<?php
    $con= new mysqli ("localhost", "root","","final_project");
    error_reporting(0);
    $em = isset($_GET['em']) ? $_GET['em'] : '';

    
?>


<?php

   //$em='tani12@gmail.com';
  // echo $em;
   $query="select * from user_info where u_mail='$em';";   
   $data=mysqli_query($con,$query);
   $result=mysqli_fetch_assoc($data);

   $em=$result['u_mail'];
   $nm=$result['u_name'];
   $pass=$result['u_pass'];
   $ph=$result['u_phone'];
   $ad=$result['u_address'];



   $query="select * from user_pic where u_mail='$em';";   
   $data=mysqli_query($con,$query);
   $result=mysqli_fetch_assoc($data);

   $pic=$result['u_pic'];

   //echo $pic;


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
   <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title></title>


  <style type="text/css">
    
    
   .ubutton
   {
       margin-left: 270px;
       margin-top: 250px;
   }

   .ubutton a 
   {
            width: 160px;
            text-decoration: none;
            display: inline-block;
            margin: 0 10px;
            padding: 12px 0;
            color:black;
            border: 1px solid black;
            border-radius: 5%;
            text-align: center;
   }

   .ubutton a:hover
   {
      background-color: #FAEBD7;
      color:black;
   }
   

.profile_pic
 {
      height: 300px;
      width: 300px;
 }
 
  .profile_pic img
  {
    margin-left: 270px;
    margin-top: 80px;
    border-radius:3px;
    border: 1px solid black;
    height: 200px;
    width:  200px;
  }

  .name
  {
    margin-top: -8px;
    margin-left: 290px ;

  }

  .name h1
  { 
    font-size: 1.5rem;
    font-weight: 100;
    color: #00008B;
  }
  

 /*  .phone
  {
    margin-top: -80px;
    margin-left: 500px ;
    padding: .1px;
  }
  .phone h1
  { 
    font-size: 1.2rem;
    font-weight: 300;
  }
 .email
  {
    margin-top: -60px;
    margin-left: 500px ;
    padding: .1px;
  }
  .email h1
  { 
    font-size: 1.2rem;
    font-weight: 300;
  }
 .address
  {
    margin-top: -80px;
    margin-left: 500px ;
      padding: .1px;
  }
  .address h1
  { 
    font-size: 1.2rem;
    font-weight: 300;
  }*/

   .dtable
   {
     margin-left: 500px;
     margin-top: -205px;
   }

   .dtable table
   {
      width: 40%;
   }

   td 
   {
     color:#00008B ;
     font-size: 1.05rem;
   }

   .edit
   {
      margin-top: -70px;
      margin-left: 1240px;

   /*   height: 300px;
      width: 180px;
      background-color: red;*/
   }

 /*  .edit table {
   border-collapse: separate;
   border-spacing: 0 15px;
   display: block;
  }
.edit td {
  width: 150px;
  text-align: center;
  padding: 5px;
}
*/
  

  </style>

</head>
<body>


     
     <div class="profile_pic">
          
          <?php echo "<img src='$pic' height='100' width='100'/>"; ?>

     </div>

    <div class="name"><h1><?php echo $nm ?></h1></div>
     <!--  <div class="email"><h1><span>Email: </span><?php echo $em ?></h1></div>
     <div class="phone"><h1><span>Phone: </span><?php echo $ph ?></h1></div>
     <div class="address"><h1><span>Address: </span><?php echo $ad ?></h1></div> -->
   
      <div class="dtable">
        <table >
          <tr>
            <td>Email:</td><td style="color: black; font-size: 1rem;"><?php echo $em ?></td>
          </tr>
           <tr>
            <td>Phone number:</td><td style="color: black;font-size: 1rem;"><?php echo $ph ?></td>
          </tr>
           <tr>
            <td>Address:</td><td style="color: black;font-size: 1rem;"><?php echo $ad ?></td>
          </tr>

        </table>
      </div>
     

    

    <div class="ubutton"><a href="p_activity.php?em=<?php echo $em ?>">Previous Activity</a></div>

    
  
  <div class="edit">
    

     <table >
                     
      <tr>
        <td> 
         <div class="profile_pic_edit">
          <a href="editProfile_picture.php?em=<?php echo $em; ?>"><i class='fas fa-edit' style='font-size:20px'></i>Change Profile Picture</a>
         </div>
       </td>
      <tr>

        <tr>
          <td>
             <div class="profile_edit"><a href="edit_profile.php?em=<?php echo $em; ?>&nm=<?php echo $nm; ?>&
              ph=<?php echo $ph; ?> & ad=<?php echo $ad; ?> &pass=<?php echo $pass; ?>"><i class='fas fa-edit' style='font-size:36px'></i>Edit Profile</a></div>

          </td>
        </tr>

     </table>
   

   
  </div>

</body>
</html>