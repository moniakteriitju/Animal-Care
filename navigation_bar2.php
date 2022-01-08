<?php   
    $con= new mysqli ("localhost", "root","","final_project");
    error_reporting(0);
 ?>




<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>


<style>


*{
   font-family: "Cantora One";
   margin:0;
   padding:0;
 }

body

{
  background: linear-gradient(rgba(175,235,235,0.3), rgba(0,0,0,0.3));
    background-size: cover;
    /* background-image: linear-gradient(to right, red , white);*/
    height: 100vh;
}

.navbar {
  width: 100%;
  /*background-color: #555;*/
  overflow: auto;
  height: 50px;
  border: 3px solid #43928f;
  background-color:#469b9b;

}

.navbar a {
  float: left;
  padding: 12px;
  color:#202020;
  text-decoration: none;
  font-size:20px;
   height: 55px;
   text-align: center;

}

.navbar a:hover {
  background-color:#b8b8b8;
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

  margin-top: -60px;
  margin-left: 1287px;
}
.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:#FDFCE5;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>

</head>


<body>


<div class="navbar">

  <div><a class="icon" href="index.html"><i class="fa fa-fw fa-home " ></i> Home</a> </div>
  <div><a href="#"><i class="fa fa-fw fa-search " ></i> Search</a></div> 

   <div class="dropdown">
     <button class="dropbtn"> <i class="fa fa-fw fa-user  "></i>Profile
      <i class="fa fa-caret-down"></i>
     </button>
    <div class="dropdown-content">

      <a href="user_profile.php?em=<?php echo $em ?>">User_Profile</a>
      <a href="dt_profile.php">Doctor_profile</a>
     
    </div>
  </div> 
  
 <!--  <i class="fa fa-fw fa-user  "></i> Profile</a> -->
 

  
<div class="imge">
   <img src="final_logo.png" style="width: 200px; height: 55px; float: left;">
</div>

</div>





</body>
</html> 