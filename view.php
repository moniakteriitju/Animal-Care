<?php 	
 include"logic.php";
 include"comment_logic.php";
?> 




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>


	 <style type="text/css">
	 	 *{
             font-family: "Cantora One";
             margin:0;
             padding:0;

          }
         
          body{
         
             background: linear-gradient(rgba(175,235,235,.5), rgba(0,0,0,.3));
             background-size: cover;
             background-position:left;
             height: 300vh;
             }

             .email
             {
                margin-left: 300px;
                margin-top: 60px;
                height: 25px;
                 width: 250px;
                 background-color: white;;

             }

             .email a 
             {
                background-color: white;;
                 height: 60px;
                 width: 900px;
                 margin-left: 10px;
              

             }

              .date
             {
                margin-left: 305px;
                margin-top: 2px;
                color: #3B185F;

             }

            .time
             {
                margin-left: 305px;
                margin-top: 0px;
                color: #3B185F;

             }

              .title
             {
                margin-left: 300px;
                margin-top: 40px;
                height: 25px;
                width: 250px;
                font-size: 2rem;
                color: #C36839;

               

             }
             .title img  
             {
                margin-left: 500px;
             }

             .post
             {
                 margin-left: 300px;
                margin-top: 40px;
                height:500px;
                width: 500px;
                font-size: 1rem;
               
             }

            

           /*.imge 
           {
              margin-left:100px;
              margin-top: 100px;
              height: 300px;
              width: 300px;
           }*/


             
       .c-form
       {
        margin-left: 300px;
        margin-top: -50px;
       }

       .bttn   
       {
          width: 100px;
          height: 30px;
          text-align: center;
        /*  background-color: #FF0000;*/
        margin-top: 3px;
       }

       .p-id
       {
          display: none;
       }

       .cheading
       {
           margin-left: 310px;
           margin-top: 80px;
           font-size: 1.4rem;
           font-weight: 200;
           color: #C36839;
            text-decoration: underline;


       }

       .c-box
       {
           margin-left: 300px;
           margin-top: 10px;
       }

       table, th, td {
  
  padding: 5px;
}
  

	</style>

</head>
<body>
     
     
    <div class="email"><a href="user_profile.php?em=<?php echo $em ?>"><?php echo $em ?></a></div>
    <div class="date"><?php  echo $date ?></div>
    <div class="time"><?php  echo $time ?></div>
    <div class="title"><?php  echo $title ?><img src="post1.png"></div>
    <div class="post"><?php  echo $content ?></div>
    
    
    
    <div class="c-form">
        <form method="GET" >

            
         
           <div class="c-mail"> <input type="text" name="emm"placeholder="Enter Email"style="height: 40px;width: 270px; background-color: #E8F6EF;margin-top: 2px;"></div>

           <div class="p-id">   <input type="text" name="idd" value="<?php echo $id ?>"></div>




          <div class="comment"><input type="text" name="cm" placeholder="Write a comment" style="height: 60px;width: 450px; background-color: #E8F6EF; margin-top: 2px;"></div>


            <div class="bttn"><button name="bttn" class="bttn">Add</button></div>



        </form>
    </div>
    

    <div class="cheading">comments</div>

   

    <?php 


       $qc="SELECT * FROM comment_table where post_id='$id';";
       $all_c=mysqli_query($con,$qc);
       $n=mysqli_num_rows($all_c);

      // echo $n;


     ?>

     <div class="c-box">
        
        <table style="width:1200px;">
            
            <?php while($rs=mysqli_fetch_assoc($all_c)){?>
               
               <tr><td style="text-decoration: underline; font-size:1.1rem"><i class="fa fa-user" style="font-size:18px"></i><?php echo $rs['u_mail'] ?></td></tr>


              <tr> <td style="color: #2A0944; font-style: italic;"><?php echo $rs['comment'] ?></td></tr>

           <?php } ?>

        </table>

         

     </div>
        





</body>

</html>