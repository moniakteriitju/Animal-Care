<?php 	
 include"logic.php";

 $qr="select * from current;";
 $res=mysqli_query($cnn,$qr);
 $rr=mysqli_fetch_assoc($res);
 $em=$rr['email'];

?> 




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

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
             height: 100%;
             }


             .post-body
             {
             	/*border: 1px solid black;*/
             	height: 200px;
             	width: 1400px;
             	margin-top: 50px;
             	margin-left:53px;
                background-color: #9D9D9D;
                box-shadow: 10px 10px #6F4C5B;
                border-radius: 1%;

             }
            
            .post-title
            {
            	margin-left: 600px;
            	margin-top: 5px;
            }
            .post-title h2
            {
            	font-size: 1.3rem;
            	font-weight: 300;
                color:#630A10;
                text-decoration:underline;
            }
             


             .mail,.date,.time
             {
                 margin-left:10px;
                margin-top: 5px;
             }

            .mail h3
            {
            	font-size: 1.2rem;
            	font-weight: 300;
            }

            .post
            {
            	margin-left: 550px;
            	margin-top: 10px;
                color: #FEF1E6;
            }
            .post p 
            {
                font-size: 1.2rem;
            }


            .link
            {
            	margin-left: 300px;
            	margin-top:25px;
            }

            .n_post
            {
                width: 1200px;
                 margin-left: 25px;


            }
          .n_post a
          {
        
            width: 1400px;
            text-decoration: none;
            display: inline-block;
            margin: 0 10px;
            padding: 12px 0;
            color:black;
            border: 5px solid #9D9D9D;
            text-align: center;
            margin-left: 25px;
            margin-top:25px;
            background-color: #D4ECDD;
            height: 100px;
        }  
          


	</style>

</head>
<body>
   
     <div class="n_post"><a href="creat_post.php"><i class='fas fa-edit' style='font-size:48px;color:r#150050'></i>Create New Post</a></div>




       <div class="container">
            <?php foreach($query as $q){ ?>
                <div class="box">
                    <div class="post-box" style="width: 18rem;;">
                        <div class="post-body">

                             <div class="mail"><h3><?php echo $q['u_mail'];?></h3></div>
                             <div class="time"><h4><?php echo $q['time'];?></h4></div>
                             <div class="date"><h4><?php echo $q['date'];?></h4></div>
                             <div class="post-title"><h2><?php echo $q['p_title'];?></h2></div>
                             <div class="post"><p><?php echo substr($q['content'], 0, 50);?>...</p>
                             <div> 

                             <div class="link"><a href="view.php?id=<?php echo $q['post_id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a></div>

                        </div>
                    </div>
                </div>
            <?php }?>
        </div>








    
</body>

</html>