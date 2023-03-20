<?php
  if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = 'sazinxyz@gmail.com';
    $subject = $message;

    $message = " Email: {$email} Phone: {$phone}  Message: " . $message;

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: bravecoder@code.akhfasoft.net';

    $mail = mail($to,$subject,$message,$headers);

    if ($mail) {
      echo "<script>alert('Mail Send.');</script>";
    }else {
      echo "<script>alert('Mail Not Send.');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style type="text/css">
  .form:hover{
    box-shadow: 1px 2px 10px 5px #375554;
  }
/*//header*/
  .menu{
      background-color: #488280 !important;
      height: 120px;
   }
   .image{
      height: 200px;
      margin-top: -42px;
      margin-left: 36%;
   }
   .hor{
   height: 3px;
   margin-top: 0px;
   background-color: white;
  }


/*footer*/


.social{
   margin-left: 44.5%;
   margin-bottom: 10px;
   width: 200px;
}
.center{
   margin-left: 2.5%;
}

.image1{
   height: 50px;
   width: 40px;
   margin-right: 10px;
}

.image2{
   height: 50px;
   width: 40px;
   margin-left: 10px;
}
.image3{
   height: 50px;
   width: 40px;
}
.fa{
   width: 50px;
}

.fa:hover {
    opacity: 0.7;
}

.section{
   margin-top: 150px;
}
.ft1{
  margin-left: 0px;
}
.y{
  margin-left: -10px;
}


/*New footer*/

.contact{
  display: flex;
  font-weight: 200px;
  font-size: 20px;
  color:#555555;
  margin-top: 250px;

}
.contactbtn{
  text-decoration: none;
  font-size: 20px;
}
.contactbtn:hover{
  text-shadow: 3px 3px 8px #488280;
  text-decoration: none;
}

.sp:hover{
  text-shadow: 3px 3px 8px #488280;
}

.faq{
  display: flex;
  font-weight: 200px;
  font-size: 20px;
  color:#555555;
  margin-top: -150px;

}
.abt{
  margin-top: 0px;
  margin-left: 0px;
}





</style>
  </head>
  <body>

    <nav class ="menu">
      <a href="../../index.php"><img class="image" src="../../6.jpg"></a>
      
   </nav>
  <hr class="hor">

  <div class="center y">


  <!-- <body class="center "> -->
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form"  >
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Have a question? Check out our FAQ page as your question may be answered there. Still need help? Contact us below.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>United City, Madani Ave, Dhaka 1212</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>salam201133@bscse.uiu.ac.bd</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>01921238128</p>
            </div>
          </div>
          <div class = "center">
          <div class="social-media" >
            <div > Contact With Us Via  </div>
            <div class="social-icons ">
              <a href="https://www.facebook.com/messages/t/syed.sazin">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://instagram.com/">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="mailto:salam201133@bscse.uiu.ac.bd">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </div>
        </div>
        </div>
 
          
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </div>

<div class="ft1">


  <p ><h2 class="sp" style="color:#555555; margin-left: 20px;">SUPPORT</h2></p>
  <footer class="section">

  <div class="faq">
    <a href="../../faq us page\faq_Us\faq_us.php" class="contactbtn"style="color:#555555; margin-left: 20px;">FAQ</a>
  </div>

  <div class="abt">
    <a href="../../About us page\About_us\About_us.php" class="contactbtn"style="color:#555555; margin-left: 20px;">About Us</a>
  </div> 

  
  <footer class="section">

  <!-- <div class="center #375554-text x" style="color:#375554">Copyright from @2022</div> -->
  <div class="social">
    <a href="http://facebook.com"><img class="fa image1" src="../../image\fb1.png" ></a>
  <a href="http://instagram.com"><img class="fa image3"  src="../../image\ins1.png" ></a>
  <a href="http://twitter.com"><img class="fa image2" src="../../image\tw1.png" ></a>
  </div>




  </body>
</html>
