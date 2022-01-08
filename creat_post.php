

<?php 	

include "logic.php";
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

<style type="text/css">
   
  
  .container
  {
      margin-left: 500px;
      margin-top: 20px;
  }
  

  h1
  {
   margin-left: 150px;
   margin-top: 50px;
   color:black;
   font-style: italic;
   text-decoration: underline;
  }

  table
  {
    margin-top: -80px;
  }

  textarea
  {
      height: 300px;
      width: 500px;
  }
  /*input
  {
   width: 300px;
   height: 30px;
   padding: 2px;
  }*/

  .email
  {
     background-color:#FFE6E6;
     width: 300px;
     height: 27px;
  }

 .date
  {
     background-color:#FFE6E6;
     height: 20px;
  }


 .time
  {
     background-color:#FFE6E6;
     height: 20px;
  }

.title
  {
     background-color:#FFE6E6;
      width: 300px;
     height: 27px;
  }

  .tarea
  {
   background-color: #E8F6EF;
  }

  .btn 
  {
     background-color: #FFE6E6;
     height: 30px;
     width: 100px;
     border-radius: 10%;
  }
  
  img 
  {
   margin-left: 320px;
   margin-top: -40px;
  }



</style>


</head>
<body>
 

 <div class="container">
     <form method="GET">


        <div><h1>Create post </h1></div>
        <div ><img src="cp1.png" style="height: 150px;width: 150px;"></div>

           <table>

               <div ><tr><td><input class="email" type="text" name="email" placeholder="Enter Email"></td></tr></div>


             <div ><tr><td><input class="title" type="text" name="title" placeholder="Post Title"></td></tr></div>

             <div ><tr><td><input class="date" type="date" name="date" placeholder="Enter Date"></td></tr></div>

               <div ><tr><td><input class="time" type="time" name="time" placeholder="Post Title"></td></tr></div>

             <div><tr><td><textarea  class="tarea" name="content"></textarea></td></tr></div>

             <div><tr><td><button  class="btn" name="btn">Add Post</button></td></tr></div>

           </table>
         
         

     </form>
 </div>


 

</body>
</html>