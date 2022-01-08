<!doctype html>
<?php
include_once 'includes.php';
$GLOBALS['fl']=0;
$GLOBALS['error']="";
$GLOBALS['success']="";

?>
<html>
<head>
    <style>
       
       body{
           /* background-image: url('log2.PNG');*/
           background-color:white;
            background-repeat: no-repeat;
           background-size: cover;
        }
        table{
            background-color:rgb(120, 144, 156);
            padding:5px;
            width:50%;
            text-align:center;
            font-size: medium;
            font-family:'Times New Roman', Times, serif;
        
        }
        .mr{
           text-align:center;
           border-radius:15px;
        }
        .cn{
           text-align:"center";
        }
        .inp{
            border-radius:5px;
            padding:10px;
            width:60%;
            margin:auto;
            background-color:none;
            text-align:center;
            font-size: medium;
            height: 40%;
            border-color: darkgray;
            
           /* font-weight: bolder;*/
        
        }
        .inp:hover{
            border-radius:5px;
            padding:10px;
            padding:10px;
            width:60%;
            height: 40%;
            margin:auto;
            background-color:darkgray;
            text-align:center;
            font-size: medium;
            /*font-weight: bolder;*/
        
        }
        th,td{color:black;
            text-align: center;
       /* font-weight: bolder;*/
        font-size:large;
    }
    .cust{
        position:absolute;
        background:none;
        margin-right:18px;
        margin-top:1px;
        width:40px;
        height:30px;
        padding-top:8px;


    }
    a{
        text-decoration:none;
        color:black;
        font-weight: bold;
    }
    .aa{
width:10%;
margin-left:40%;
margin-right:60%;

background-color:rgb(93, 109, 126);
text-align: center;
border-radius:4px;
color:black;
padding:10px;


    }
    .aa:hover{
width:10%;
margin-left:40%;
margin-right:60%;

background-color:white;
text-align: center;
border-radius:4px;
color:black;
padding:10px;


    }

   

    </style>
    <link rel="stylesheet" href="nav_style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body background="pic2.jpg">
<p><img src="pic3.png" alt="Anymale care" style="float:right;width:150px;height:100px;"></p>

<br><br><br>
<br><br>
    
    <table class="mr" border="0" align="center" cellpadding="10"><tr><td>
    <h2><P align="center">LOG IN</P></h2>
    <form  method="POST" action="doctor_profile.php">
    <input type="radio" name="as" value="doc" required> Log in as Doctor
   <input type="radio" name="as" value="mem"> Log in as Member
   <input type="radio" name="as" value="ad"> Log in as Admin
   <br><br>
       <!-- <label for="email">   E-MAIL:   </label><br>-->
       <i class="fa fa-envelope fa-2x cust" style="font-size:24px"></i>
        <input class="inp" placeholder="Email"type="text" id="email" name="email"required><br><br>
        <!--<label for="pass">PASSWORD:</label><br>-->
        <i class="fa fa-lock fa-2x cust" style="font-size:24px"></i>
        <input class="inp" placeholder="Password" type="password" id="pass" name="pass"required><br><br>
        
    
        <input classs="inp" name='submit' type="submit" value="LOG IN">
        <p>
        <?php
    echo "<p style color:'red'> $error</p>";
        ?>
        
        </p>
        
        
        
    </td>
    </tr>

    </form>
    </table>
    <br><br><br>

   
    <div class="aa"> <a href="index.html">Go back</a></div>





</body>
</html>
