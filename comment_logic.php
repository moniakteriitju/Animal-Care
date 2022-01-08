<?php 	



   $con= new mysqli ("localhost", "root","","final_project");
   
   

  if(isset($_REQUEST['bttn']))
  { 
     
     $xem=$_REQUEST['emm'];
  	 $xp_id=$_REQUEST['idd'];
  	 $xcm=$_REQUEST['cm'];

  	 
    

  	  
  	  $query="insert into comment_table(post_id,u_mail,comment) values ('$xp_id','$xem','$xcm');";

  	  echo $query;

  	  $data=mysqli_query($con,$query);

      header("location:view.php");
  	  exit();

  }


 ?>