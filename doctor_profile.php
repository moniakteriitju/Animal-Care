<html>
<head>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="doctor_page.css">
    <style>
        body {
            background-color:white;
    background-repeat: no-repeat;
  background-size:cover;

        }

        table {
            width: 80%;
            height: 15%;
            border-spacing: 3px;
        


        }

        td {
            text-align: center;
            font-weight: bold;
        }

        th {
            text-align: center;
            font-weight: bolder;
        }

        p {
            color: black;
            font-size: larger;
        }

        .mydiv {


            text-align: center;
        }

        .inf {
            width: 50%;
            text-align: center;
            margin: auto;
            background-color: aliceblue;
            color: black;
            border-radius: 5px;
            padding: 25px;
            font-size: larger;
        }
        .cc{
            
            border-radius:5px;
        }
       a{
           text-decoration:none;
           display:block;
           color:rgb(33, 47, 61);
    padding: 0 28px;
    font-size: x-large;
     border:2px solid rgb(33, 47, 61);
     padding: 2 2px;
     width:20%;
     border-radius:10px;

       }
       a:hover{
    background-color:rgb(33, 47, 61);
    color:white;
    width:20%;
    padding: 2 2px;
    border-radius:10px;
}
    </style>
    <link rel="stylesheet" href="nav_style.css">
</head>
<body background="pic2.jpg">


<p><img src="pic3.png" alt="Anymale care" style="float:right;width:200px;height:100px;"></p>


<?php
include_once 'includes.php';


$email=$_POST["email"];
$pass=$_POST["pass"];
$log_in_as=$_POST["as"];
/*echo $pass;*/
/************************************************************************************************************************ */

if($log_in_as=="doc"){
    $qr="delete from current;";
$res=mysqli_query($cnn,$qr);



   
    $qr="select * from doctor_info where d_mail='$email';";

    /*$qr = "select pass from doctorlogg where id='$dd';";*/
$res = mysqli_query($cnn, $qr);
$nr = mysqli_num_rows($res);
$rr=mysqli_fetch_assoc($res);

if ($nr != 1) {
    
    

?>
<br><br><br>
    <table class="cc" border='0' align='center' >
        <tr>
            <td>
                <h1>
                    <P style="color:red">INVALID EMAIL OR PASSWORD !
                </h1>
                </P>
                <P align="center"><a href='login.php'>TRY AGAIN</a></P>
            </td>
        </tr>
    </table>
    <?php
}
 else {

    
    if ($rr['d_pass'] != $pass) {
        
        echo $rr['d_pass']; 
        
    ?>
<br><br><br>
        <table class="cc" border='0' align='center' cellpadding='50'>
            <tr>
                <td>
                    <h1>
                        <P style="color:red">INVALID EMAIL OR PASSWORD !
                    </h1>
                    </P>
                    <P align="center"><a href='login.php'>TRY AGAIN</a></P>
                </td>
            </tr>
        </table>
    <?php
    } 
    else{
        
        ?>
        <br><br><br>
                    <table class="cc" border='0' align='center'>
                        <tr>
                            <td>
                                <h1>
                                    <P style="color:rgb(33, 47, 61)">Welcome To Doctor Page!
                                </h1>
                                </P>
                            <?php
                            $pp=$rr['d_mail'];
                            $qr="insert into current values('$pp')";
                            $res = mysqli_query($cnn, $qr);
                            $qr="select * from photos where d_mail='$email';";
                            $res = mysqli_query($cnn, $qr);
                            $nr = mysqli_num_rows($res);





                            if($nr==0){
                            $qr="insert into photos values('$pp','user_icon.PNG')";
                            $res = mysqli_query($cnn, $qr);
                            }


                            header('location:home.php');

                               echo "<P align='center'><a href='doctor.php?d_mail=$email'>See Details !</a></P>";
                              /* echo "<P align='center'><a href='home_page.php'>Home!</a></P>";*/
                               ?>
                            </td>
                        </tr>
                    </table>
                <?php

    }

 }
}


  
    else if($log_in_as=="ad"){
        $qr="delete from current;";
        $res=mysqli_query($cnn,$qr);

        $qr="select * from admin_info where a_mail='$email';";
        /*$qr = "select pass from doctorlogg where id='$dd';";*/
    $res = mysqli_query($cnn, $qr);
    $nr = mysqli_num_rows($res);
    $rr=mysqli_fetch_assoc($res);
    if ($nr != 1) {
    ?>
<br><br><br>
        <table class="cc" border='0' align='center' >
            <tr>
                <td>
                    <h1>
                        <P style="color:red">INVALID EMAIL OR PASSWORD !
                    </h1>
                    </P>
                    <P align="center"><a href='login.php'>TRY AGAIN</a></P>
                </td>
            </tr>
        </table>
        <?php
    }

     else {

        
        if ($rr['a_pass'] != $pass) {

        ?>
<br><br><br>
            <table class="cc" border='0' align='center' cellpadding='50'>
                <tr>
                    <td>
                        <h1>
                            <P style="color:red">INVALID EMAIL OR PASSWORD !
                        </h1>
                        </P>
                        <P align="center"><a href='login.php'>TRY AGAIN</a></P>
                    </td>
                </tr>
            </table>
        <?php

        } 
        else{

            ?>
            <br><br><br>
                        <table class="cc" border='0' align='center'>
                            <tr>
                                <td>
                             
                                    <h1>
                                        <P style="color:rgb(33, 47, 61)">Welcome To Admin Page!
                                    </h1>
                                    </P>
                                <?php
                                   $pp=$rr['a_mail'];
                                   $qr="insert into current values('$pp')";
                                   $res = mysqli_query($cnn, $qr);
       
                                   header('location:admin.php');
                                   echo "<P align='center'><a href='admin.php?a_mail=$email'>See Details !</a></P>";
                                  /* echo "<P align='center'><a href='home_page.php'>Home!</a></P>";*/
                                   ?>
                                </td>
                            </tr>
                        </table>
                    <?php

        }
     }
    }
  
    /*************************************************************************************************** */
        else{
            $qr="delete from current;";
            $res=mysqli_query($cnn,$qr);

            $qr="select * from user_info where u_mail='$email';";
            /*$qr = "select pass from doctorlogg where id='$dd';";*/
        $res = mysqli_query($cnn, $qr);
        $nr = mysqli_num_rows($res);
        $rr=mysqli_fetch_assoc($res);
        if ($nr != 1) {
        ?>
    <br><br><br>
            <table class="cc" border='0' align='center' >
                <tr>
                    <td>
                        <h1>
                            <P style="color:red">INVALID EMAIL OR PASSWORD !
                        </h1>
                        </P>
                        <P align="center"><a href='login.php'>TRY AGAIN</a></P>
                    </td>
                </tr>
            </table>
            <?php
        }
         else {
            if ($rr['u_pass'] != $pass) {
    
            ?>
    <br><br><br>
                <table class="cc" border='0' align='center' cellpadding='50'>
                    <tr>
                        <td>
                            <h1>
                                <P style="color:red">INVALID EMAIL OR PASSWORD !
                            </h1>
                            </P>
                            <P align="center"><a href='login.php'>TRY AGAIN</a></P>
                        </td>
                    </tr>
                </table>
            <?php
            } 
            else{
    
                ?>
                <br><br><br>
                            <table class="cc" border='0' align='center'>
                                <tr>
                                    <td>
                                        <h1>
                                            <P style="color:rgb(33, 47, 61)">Welcome To User Page!
                                        </h1>
                                        </P>
                                    <?php
                                       $pp=$rr['u_mail'];
                                       $qr="insert into current values('$pp')";
                                       $res = mysqli_query($cnn, $qr);
           
                                       header('location:home.php');
                                       echo "<P align='center'><a href='doctor.php?u_mail=$email'>See Details !</a></P>";
                                      /* echo "<P align='center'><a href='home_page.php'>Home!</a></P>";*/
                                       ?>
                                    </td>
                                </tr>
                            </table>
                        <?php
    
            }
        }
    }
    
    
    /*echo $log_in_as;*/
        
    
    ?>

</body>
</html>
