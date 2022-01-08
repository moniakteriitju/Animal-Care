<?php 	
error_reporting(0);
?>
<?php 
    include_once ("navigation_bar.php");
?> 


<?php
    $con= new mysqli ("localhost", "root","","final_project");
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>

   <style type="text/css">
        
        .box
        {
             width: 350px;
             height: 350px;
             border: 1px solid black;
             margin-left: 600px;
             margin-top: 100px;
            box-shadow: 5px 10px #888888;
        }

       .file
        {
          margin-top: 60px;
          margin-left:80px;
        }
        .submit
        {
          margin-top: 180px;
          margin-left:80px;
        }

        .img-box
        {
             margin-top: -290px;
             margin-left:680px;
        }

        .box-imge
        {
              margin-top: -110px;
             margin-left:980px;
        }

   </style>

</head>

<body>
   <div class="box">
      <form action="" method="POST" enctype="multipart/form-data" >
       <div class="file"><input type="file" name="uploadfile" value=""/></div>
       <div class="submit"> <input type="submit" name="submit" value="Upload File"/></div>
      
     </form>
   </div>

   <div class="box-imge"><img src="spic_2.png"></div>
   
</body>
</html>


<?php 
   



   

if(Isset($_POST['submit']))
 {
    

   
    $em = isset($_GET['em']) ? $_GET['em'] : '';

    $query= "delete from user_pic where u_mail='$em';";
    $data=mysqli_query($con,$query);


    
    $filename=$_FILES["uploadfile"]["name"];
    $tempname=$_FILES["uploadfile"]["tmp_name"];
    $folder=$filename;

    ?>
      

         <html><div class="img-box"><?php  echo "<img src='$folder' height='100' width='100'/>"; ?></div></html>


         
   
   
    <?php  
    

    $query="insert into user_pic values('$em','$folder');";
   
    if($em!="" & $folder !="")$data=mysqli_query($con,$query);

    if($data)
    {
   	 // echo "updated!";
    }

}


 ?>
