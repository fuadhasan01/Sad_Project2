<?php

@include 'config.php';
session_start();
$s_email= $_SESSION['email'];


if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $select= "SELECT * FROM user_form WHERE email = '$s_email' ";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result) > 0){

        $update= "UPDATE user_form SET name = '$name' WHERE email = '$s_email' ";
        $result = mysqli_query($conn, $update);
        header('location:logout.php');
  
     }

};


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

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





   </style>


</head>
<body >
   <nav class ="menu">
      <a href="../index.php"><img class="image" src="../6.jpg"></a>
         
   </nav>

      
 <hr class="hori">
  
<div class="form-container" style="background: linear-gradient(to bottom, #41716f 0%, #547f7d 10%, #678d8c 20%, #7a9c9a 30%, #8daaa9 40%, #ffffff 100%)">

   <form action="" method="post">
      <h3>Profile Update</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" value="<?php echo $_SESSION['name'];?>">
      <input type="submit" name="submit" value="Update Now" class="form-btn">
      
   </form>

</div>


</body>
</html>
