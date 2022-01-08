<!DOCTYPE html>
<html>
  
<head>
    <title>Image Upload</title>
   <link rel="stylesheet" 
          type="text/css"
          href="style.css" />
          <style>

             .inp{
              padding:5px;
              border-radius:3px;
              background-color:none;
              border:none;
          }

          .aa{
width:10%;
margin-left:40%;
margin-right:60%;

background-color:rgb(169, 204, 227);
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
    a{
        text-decoration:none;
        font-size: larger;
    }
          </style>
         
</head>
 <?php
 
 ?> 
<body background="pic2.jpg">;
<p><img src="pic3.png" alt="Anymale care" style="float:right;width:150px;height:100px;"></p>
<br><br><br><br><br>
    <div id="content">
  
        <form method="POST" 
              action="action_image_upload.php" 
              enctype="multipart/form-data">
            <input class="inp" type="file" 
                   name="uploadfile" 
                   value="" />
  
            <div>
                <button class="inp" type="submit"
                        name="upload">
                  UPLOAD
                </button>
            </div>
        </form>
    </div>
    <p><img src="pic5.png" alt="Anymale care" style="float:left;width:300px;height:300px;"></p>
    <div class="aa"> <a href="doctor.php">Go back</a></div>
</body>
  
</html>