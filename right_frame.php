<?php
include("connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            #btn{
    background-color:#dcdcf4;
    color: black; 
    height: 35px;
    width: 100px;
    border-radius: 25px;
    float:right;
    border-color: #dcdcf4;
    font-size: 20px;
}
.btn:hover{
                background-color: grey;
                width: 100px;
            }
#btn1{
    background-color:#dcdcf4;
    color: black; 
    height: 35px;
    width: 100px;
    border-radius: 25px;
    float:left;
    border-color: #dcdcf4;
    font-size: 20px;
}
.btn1:hover{
                background-color: grey;
                width: 100px;
            }

            #btn2{
    background-color:#dcdcf4;
    color: black; 
    height: 35px;
    width: 220px;
    border-radius: 25px;
    text-align: center;
    border-color: #dcdcf4;
    font-size: 20px;
}
.btn2:hover{
                background-color: grey;
                width: 220px;
            }
            
td{
                text-align: center;
                border-radius: 25px;
            }
        </style>
</head>
<body>

<table bgcolor="#c6ecdc" width="100%">
    <tr>
        <td><p><img src="pic3.png" alt="Animal care" style="float:right;width:220px;height:80px;"></p>
</td>
    </tr>
</table>

<br>
<table width="100%" border="0" height="200" cellspacing="20">
    <tr>
        <td width="20%" bgcolor="#dcdcf4"><font size="4">Total Doctors: 
         <?php
         error_reporting(0);
          $query=" select * from doctor_info";
          $data=mysqli_query($conn,$query);
          $total=mysqli_num_rows($data);
          if($data!=0){
              $total-=1;
              echo "$total";
          }
          else{
              echo "0";
          }
         ?>   
        </font></td>
        <td width="20%" bgcolor="#dcdcf4"><font size="4">Total Uers:
        <?php
          $query=" select * from user_info";
          $data=mysqli_query($conn,$query);
          $total=mysqli_num_rows($data);
          if($data!=0){
              $total-=1;
            echo "$total";
          }
          else{
            echo "0";
        }
         ?>
        </font></td>
        <td width="20%" bgcolor="#dcdcf4"><font size="4">Total Posts:
        <?php
         error_reporting(0);
          $query=" select * from post_table";
          $data=mysqli_query($conn,$query);
          $total=mysqli_num_rows($data);
          if($data!=0){
              echo "$total";
          }
          else{
              echo "0";
          }
         ?> 
        </font></td>
    </tr>
</table>
<p><img src="cad.jpg" alt="Animal care" style="margin-left: auto; margin-right: auto;width:30%;display: block;height:200px;"></p>

<br><br><br><br><br><br>
<table  width="100%" height="50" border="0">
    <tr>
        <td class="btn1"><a href="home.php" target="_top"> <input type="button" id="btn1" value="Home"></a></td>
        <td class="btn2"><a href="admin_reg.php" target="_top"> <input type="button" id="btn2" value="Register New Admin"></a></td>
        <td class="btn"><a href="index.html" target="_top"> <input type="button" id="btn" value="Logout"></a></td>

    </tr>
</table>

<script>
    $('#btn').click(function(e) {
  e.preventDefault();
});
</script>
</body>
</html> 