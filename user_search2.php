
<?php 
include_once ("navigation_bar.php");
?>

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


<style>

  .table
  {
      margin-top:20px;
       margin-left: auto;
     margin-right: auto;
      background-color: #9d9ec8;
  }

  .heading
  {
     margin-left: auto;
     margin-right: auto;
     text-align:center;
     margin-top: 80px;
     background-color:white;
     border: 3px solid white;
     width: 300px;
     border-radius: 20px;
  }

    .heading h2
     {
            font-size: 50px;
            color:#9d9ec8;
     }

     .imge
     {
          margin-top: -170px;
          margin-left: 2
          0px;
     }

</style>


</head>



<body>

     
     <?php
        
        $ar= (isset($_POST['ar']) ? $_POST['ar'] : '');

        $query="select d_mail,d_name,d_phone,hospital_name,address from doctor_info where status='$ar';";   

        //echo $query;
        
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);
 
      ?>
      
      <div class="result">
      
      <div class="heading">
        <h2>Doctors list</h2>

      </div><br>
        <div class="imge"><img src="upic1.png"></div>

         <table border=2px style="width : 50%;" class="table">
                     <tr style="background-color: #c1a7a7;">
                         <th>Email</th>
                         <th>Name</th>
                         <th>Phone Number</th>
                         <th>Hospital Name</th>
                         <th>Hospital Address</th>
                               
                     </tr>
                     <?php

                          
                           if($total !=0)
                           {
                               while($result=mysqli_fetch_assoc($data))
                               {
                                   ?>
                                
                                   <tr>
                                      <td><?php echo $result['d_mail']; ?></td>
                                      <td><?php echo $result['d_name']; ?></td>
                                      <td><?php echo $result['d_phone']; ?></td>
                                      <td><?php echo $result['hospital_name']; ?></td>
                                      <td><?php echo $result['address']; ?></td> 
                                      
                                    </tr>
                                    
                                <?php
                                
                               }
                           }
                           

                    ?>
            </table>

    

  </div>

 

</body>
</html>