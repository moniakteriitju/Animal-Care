



<?php 
include_once ("navigation_bar.php");
?>


<!DOCTYPE html>
<html >
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>query_page</title>


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
    height:100vh;
    background-size: cover;
}


  .search{
       
       /* width:950px;*/
        height:20%;
        margin-left: auto;
        margin-right: auto;

       
    }


    .heading
    {
        
        margin-left: auto;
        margin-right: auto;
        text-align:center;

        margin-top: 100px;
       
    }

     .heading h2{
       
       font-size: 2rem;
       line-height: 2;
       word-spacing: 4px;
       text-align:center;
       font-weight:400;
       color:#212529;
       /* box-shadow: 0 0 10px 0 #495057; */
   }
    .table_s{
      
        margin-left: auto;
        margin-right: auto;
        width:400px;
        height:100px;
        padding:5px;
        /* box-shadow: 0 0 25px 0 #1E6729; */
    }

    .form{
        margin-top: auto;
        margin-right: auto;
       
    }

   .table_s label{
         font-size: 1.6rem; 
        line-height: 1.6;
        word-spacing: 1px;
        font-weight:500;
        color:#001a1a;
      
       
     
    }
   .table_s input{
      
        line-height: 2;
        word-spacing: 4px;
        text-align:center;
        font-weight:500;
        color:#001a1a;
        width:150px;
        box-shadow: 0 0 5px 0   #33716d;
        height: 60px;
    }

   .table_s button
   {
    width: 100px;
    height: 40px;
   }
   


   .table_s button:hover
   {
      background-color:   #a9d8d7;
   }

   .low_img
   {
       

        margin-left: 1100px;
        margin-top: -100px;
   }


</style>

</head>


<body>



 <div class="search">  
    
    <div class="heading"><h2>See available doctors in your area:</h2></div>

      <form action="user_search.php" method="post" class="form" >
      
        <table class="table_s" style="width: 600px;">
          <tr>
              <td><lebel>Enter Area Name: </td>
              <td><input type="text" name="ar" style="width: 300px;"></input>
              <td> <button type="submit" class="btn">Search</button></td>
          </tr>
       </table>
      </form>
 
     </div>


     <div class="heading"><h2>See available doctors who are online:</h2></div>

<form action="user_search2.php" method="post" class="form" >
  <table class="table_s" style="width: 600px;">
    <tr>
        <td><lebel>Enter Availability: </td>
        <td><input type="text" name="ar" style="width: 300px;"></input>
        <td> <button type="submit" class="btn">Search</button></td>
    </tr>
 </table>
</form>

</div>


     <div class="low_img">
         <img src="spic_2.png ">
     </div>



</body>
</html> 