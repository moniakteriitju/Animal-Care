<?php 	

  error_reporting(0);
  include_once ("navigation_bar.php");

  $con= new mysqli ("localhost", "root","","final_project");

  //if($con)echo "connected";

 $sql = "SELECT * FROM post_table  ORDER BY post_id DESC;";
 $query = mysqli_query($con, $sql);


  if(isset($_REQUEST['btn']))
  { 
     
     $email=$_REQUEST['email'];
  	 $title=$_REQUEST['title'];
  	 $date=$_REQUEST['date'];
  	 $time=$_REQUEST['time'];
  	 $content=$_REQUEST['content'];

  	 //echo $email,$title,$date,$time,$content;

  	 $query="insert into post_table(u_mail,p_title,date,time,content) values ('$email','$title','$date','$time','$content');";

  	 echo $query;

  	 $data=mysqli_query($con,$query);

     header("location:home.php");
  	 exit();

  }





// view post

   if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM post_table WHERE post_id = '$id';" ;
      // echo $sql;
       
        $data=mysqli_query($con,$sql);

        $result=mysqli_fetch_assoc($data);

        $em=$result['u_mail'];
        $date=$result['date'];
        $time=$result['time'];
        $title=$result['p_title'];
        $content=$result['content'];

        //echo $em,$title,$date,$time,$content;

    }





 ?>