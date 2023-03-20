<?php 
@include 'config.php';
session_start();

$artID=$_GET['p'];

 if(isset($_POST['submit'])){
   $userID=$_SESSION['id'];
   $art_id = $_POST['art_id'];
   
   $value=1;
   
   $sql1 = "SELECT * FROM vote WHERE a_id='$art_id'";
   // echo $value;
   $result = mysqli_query($conn, $sql1);
   // echo $result;

   if(mysqli_num_rows($result) > 0){
      $error ="Vote already done with this id";   
     }else{
      $insert = "INSERT INTO vote(u_id,a_id, reaction) VALUES
         ('$userID','$art_id','$value')";
         mysqli_query($conn, $insert);
       header('location:viewart.php');   
   }
      header('location:viewart.php');   
 };

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


<style type="text/css">
/*  header  */

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
margin-top: 50px;
background-color: white;
}

/*footer*/
.ft1{
    margin-top: 150px;
}
.social{
margin-left: 41%;
/*   margin-bottom: 10px;*/
margin-top: 50px;
width: 200px;
height: 100px;
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

.contact{
display: flex;
font-weight: 200px;
font-size: 20px;

}

.contactbtn:hover{
text-shadow: 3px 3px 8px #488280;
}
.x{
margin-left: 540px;
color:#488280;
}
.btn{
margin-left: 90%;
margin-top: -300px;
background-color: #fff;

}

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
.sp{
font-size: 20px;
font-weight: 200px;
font-family: poppins, sans-serif;
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
display: flex;
margin-top: -195px;
margin-left: 0px;
}




/*profile dropdown menu*/

.uls{
list-style: none;
margin-left: 85%;
margin-top: -85px;
}

.ulsleft{
list-style: none;
margin-top: -85px;
}

.ulsList{
display: inline-block;
position: relative;
color: black;
}

.ulsList a{
display: block;
padding: 10px 15px;
color: black;
text-decoration: none;
text-align: justify;
font-size: 20px;
}

.dropdown li{
display: block;
}

.dropdown{
width: 100%;
background: #fafafa;
position: absolute;
z-index: 999;
display: none;
width: 200px;
text-align: justify;
}

.ulsList a:hover{
background: #488280;
box-shadow: 1px 2px 10px 5px #375554
}

.ulsList:hover ul.dropdown{
display: block;
}
.pro{
margin-top: -10px;
background: #fafafa;
}
.ulsList a:hover{
color: white;
}
.image_profile{
height: 80px;
width: 80px;
margin-top: -15px;
}
.image_menu{
height:20px;
width: 25px;
margin-left: 110px;
margin-top: 15px;

}

/*artShow*/
.artShow{
    justify-content: left;
    align-items: left;
    flex-wrap: wrap;
    margin-left: 500px;
}
.alb {
height: 370px;
}
.alb img {
width: 100%;
height: 100%;
padding: 4px 4px;
/* box-shadow:2px 2px 2px 2px #375554; */
}

.alb img:hover{
box-shadow: 1px 2px 10px 5px #375554;

}

.card1{
width: 550px;
height: 1000px;
box-shadow: 3px 4px 10px black;
background: #fafafa;
margin-left: 45px;
margin-top: 50px;
}

.title{
padding: 10px;
text-align: left;
font-size: 18px;
margin-top: 10px;
}
.vote{
    margin-left: 250px;
    margin-top: 30px;
}

</style>
<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
<nav class ="menu">
      <a href="../index.php"><img class="image" src="6.jpg"></a>
    </nav>
      <div class="profile">
        <ul class="uls">
          <li class="ulsList">
            <!-- <a href="login.php" class="pro z-depth-2">Profile</a> -->
                  <img class="image_profile" src="../image/main.png">
          <ul class="dropdown">
            <li><h6 style="margin-left: 17px; color: #488280; text-align: left;"><b>Welcome <span><?php echo $_SESSION['name']?> !</span></b></h6></li>
            <hr>
            <li><a href="logout.php">Log Out</a></li>

          </ul>
          </li>
        </ul>
      </div>


      <div class="profile">
        <ul class="ulsleft">
          <li class="ulsList">
                  <img class="image_menu" src="../image/menubar.png">
          <ul class="dropdown">
            <li><a href="#">Favourites</a></li>
            <li><a href="#">Artist</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Upcoming Shows</a></li>
            <li><a href="#">Ongoing Shows</a></li>
            <li><a href="#">Previous Shows</a></li>

          </ul>
          </li>
        </ul>
      </div>

  <hr class="hor">


<div class="artShow">
        <?php
            $sql = "SELECT * FROM art WHERE id='$artID'";
            $res = mysqli_query($conn,  $sql);
            
            if (mysqli_num_rows($res) > 0) {
               $images = mysqli_fetch_assoc($res)
               ?>
               
               <div class="card1"> 
                 <div class="alb">
                    <img src="uploads/<?=$images['url']?>">
                   <br>
                 </div>
                 <div class="title">
                 <p><b>Name: </b><?php echo $images['name'] ?></p>
                 <!-- </div> -->
                 <!-- <div class="title"> -->
                 <p><b>About: </b><?php echo $images['about'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                 <p><b>Medium: </b><?php echo $images['medium'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                 <p><b>Color: </b><?php echo $images['color'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                 <p><b>Style: </b><?php echo $images['style'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                 <p><b>Materials: </b><?php echo $images['materials'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                 <p><b>Impasto: </b><?php echo $images['impasto'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                 <p><b>Size: </b><?php echo $images['size'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                 <p><b>Height: </b><?php echo $images['height'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                 <p><b>Width: </b><?php echo $images['width'] ?></p>
                 <!-- </div>
                 <div class="title"> -->
                    <p ><b style="font-size:30px">&#36 </b><?php echo $images['price'] ?></p>

                 </div>
                 <form action="artdetails.php?p=<?=$images['id']?>" method="POST">
                 <div class="vote">
                  <input type="hidden" name="art_id" value="<?=$images['id']?>" />
                  <input type="submit" name="submit" value="VOTE"class="from-btn">
                 </div>
               </form>
              </div>
                  
          <?php }

                else{
                ?>
                   <h5 style="margin-left: 43%;color: #375554;">No Art added yet.</h5>
                <?php
                        }
                ?>
    </div>
</div>


<!-- footer -->
<div class="ft1">
  <p ><h2 class="sp" style="color:#555555; margin-left: 20px;"><b>SUPPORT</b></h2></p>
  <footer class="section">
    <div class="contact">
    <a href="../contact us page\ContactUs\contact_us.php" class="contactbtn"style="color:#555555; margin-top: -410px; margin-left: 20px;">Contact Us</a>
  </div>

  <div class="faq">
    <a href="../faq us page\faq_Us\faq_us.php" class="contactbtn"style="color:#555555; margin-left: 20px;margin-top: -230px;">FAQ</a>
  </div>

  <div class="abt">
    <a href="../About us page\About_us\About_us.php" class="contactbtn"style="color:#555555; margin-left: 20px;">About Us</a>
  </div> 

  <div class="social">
    <a href="http://facebook.com"><img class="fa image1" src="../image\fb1.png" ></a>
  <a href="http://instagram.com"><img class="fa image3"  src="../image\ins1.png" ></a>
  <a href="http://twitter.com"><img class="fa image2" src="../image\tw1.png" ></a>
  </div>
</footer>
</div>


  
  

</body>
</html>
