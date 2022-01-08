<?php   
  include_once ("navigation_bar.php");
  $con= new mysqli ("localhost", "root","","final_project");
?> 


<?php   

 
     $em = isset($_GET['em']) ? $_GET['em'] : '';
       //echo $em;


     $sql = "SELECT * FROM post_table WHERE u_mail= '$em';" ;
   //  echo $sql;
       
      $data=mysqli_query($con,$sql);
      //$id=$data['post_id'];

?>
    


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
             height: 400vh;
             }
           .date
             {
                margin-left: 260px;
                margin-top: 250px;
                color: #3B185F;

             }

            .time
             {
                margin-left: 260px;
                margin-top: 0px;
                color: #3B185F;

             }

              .title
             {
                margin-left: 260px;
                margin-top: 20px;
                height: 25px;
                width: 250px;
                font-size: 2rem;
                color: #206A5D;

               

             }
             .title img  
             {
                margin-left: 500px;
             }

             .post
             {
                 margin-left: 100px;
                margin-top: 20px;
                height:500px;
                width: 500px;
                font-size: 1rem;
             /*  // border: 1px solid black;*/
             padding: 10px;
               
             }

       .cheading
        {
           margin-left: 850px;
           margin-top: -360px;
           font-size: 1.4rem;
           font-weight: 200;
           color: #206A5D;
            text-decoration: underline;


       }

       .c-box
       {
           margin-left: 850px;
           margin-top: 5px;
       }

     

            
    </style>
</head>
<body>

    <div class="post">
      <?php while($rs=mysqli_fetch_assoc($data)){?>
           

            <div class="date">date: <?php  echo $rs['date'] ?></div>
            <div class="time">time: <?php  echo $rs['time'] ?></div>
            <div class="title"><?php  echo $rs['p_title'] ?><img src="prc1.png"></div>
           <div class="post"><?php  echo $rs['content'] ?></div>

          <?php $id=$rs['post_id']; ?>


       <?php 


        $qc="SELECT * FROM comment_table where post_id='$id';";
        $all_c=mysqli_query($con,$qc);
        



       ?>

       <div class="cheading">comments</div>

       <div class="c-box">
        
         <table style="width:300px;">
            
             <?php while($rs=mysqli_fetch_assoc($all_c)){?>
               
               <tr><td style="text-decoration: underline; font-size:1.1rem; width: 150px;"><i class="fa fa-user" style="font-size:18px"></i><?php echo $rs['u_mail'] ?></td>


               <td style="color: #2A0944; font-style: italic; width: 100px;"><?php echo $rs['comment'] ?></td></tr>

            <?php } ?>

         </table>

         

      </div>
        



       <?php } ?>
  </div>

</body>
</html>





