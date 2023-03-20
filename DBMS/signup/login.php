<?php

@include 'config.php';
session_start();
if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username= mysqli_real_escape_string($conn, $_POST['username']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      $_SESSION['name'] = $row['name'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['id'] = $row['id'];
         $_SESSION['userName'] = $row['userName'];
         $_SESSION['pass'] = $row['password'];
      if($row['user_type'] == 'Customer'){        
         header('location:viewArt.php');

      }else if($row['user_type'] == 'Artist'){   
         header('location:Add Art/personalArtView.php');

      }else if($row['user_type'] == 'Gallery'){
         header('location:GalleryPage.php');

      }
   }else{
      $error[] ="Incorrect email or password!";
   }

};


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style type="text/css">
        .menu{
      background-color: #488280 !important;/*#375554*/
      height: 120px;
   }
   .image{
      height: 200px;
      margin-top: -42px;
      margin-left: 550px;
   }

   .container{
      margin-left: 20px;

   }

   div.foot{
      text-align: center;
      color: #375554;
      /*background-color: #375554 !important;*/
      height: 50px;

   }
   .home{
      text-align: right;
      margin-top: -120px;
      margin-right: 30px;

   }
   .btn{
      background-color: whitesmoke;
      color: #375554;
      padding: 8px;
   }
   .home:hover{
      padding: 3px 3px 3px 3px;
   }
   .btn:hover{
      box-shadow: 1px 2px 10px 5px #375554;
   }
   .hori{
   height: 3px;
   margin-top: 0px;
   background-color: white;
}
.form-btn{
   background-color: #37554f;
   color: #b3c6c5;
}

.lgn{
   margin-left: 10px;
}
.lgn:hover{
   text-shadow: 1px 2px 7px #375554;
}

.form-btn:hover{
   box-shadow: 1px 2px 10px 5px #375554;
}
.lng:hover{
   text-shadow: 1px 2px 7px #375554;
}





   </style>


</head>
<body >
   <nav class ="menu">
      <a href="../index.php"><img class="image" src="6.jpg"></a>
         
      <!-- <div class="home">
         <a href="../index.php" class="btn brand z-depth-1">Home Page</a>
      </div> -->
   </nav>

      
 <hr class="hori">
  
<div class="form-container" style="background: linear-gradient(to bottom, #41716f 0%, #547f7d 10%, #678d8c 20%, #7a9c9a 30%, #8daaa9 40%, #ffffff 100%)">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="submit" name="submit" value="Login Now" class="form-btn">
      <p><a href="forget.php" class="lng" >Forget password?</a></p>
      <p>Don't have an account? <a href="Signup.php" class="lgn"><b>Sign Up</b></a></p>
   </form>

</div>
<div class="foot">
   <footer >
   <div class="footer">Copyright from @2022</div>
</footer>
</div>


</body>
</html>
