<?php 
@include 'config.php';
session_start();
// Search
    if(isset($_GET['search'])) {
        $key = $_GET['search'];
        $s_sql = "SELECT u.name as u_name, a.* FROM user_form as u INNER JOIN art as a ON u.id=a.user 
        where u.name Like '%$key%' or a.name Like '%$key%' or a.color Like '%$key%' or a.materials Like '%$key%' 
        or a.medium Like '%$key%' or a.price Like '%$key%' or a.size Like '%$key%' or a.impasto Like '%$key%'";        
    }
 ?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    </title>
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
.social{
  margin-left: 44.5%;
  margin-bottom: 10px;
  width: 200px;
}
.center{
  margin-left: 44.5%;
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

.contact{
  display: flex;
  font-weight: 200px;
  font-size: 20px;
  color:#555555;
  margin-top:35px;
}

.contactbtn:hover{
  text-shadow: 3px 3px 8px #488280;
}
.section{
  margin-top: 160px;
}
.faq{
  display: flex;
  font-weight: 200px;
  font-size: 20px;
  color:#555555;
  margin-top: -220px;
}
.sp{
display: flex;
margin-left: 20px;
margin-top: 150px;
font-family: poppins,sans-serif;
font-weight: 200px;


}
.sp:hover{
  text-shadow: 3px 3px 8px #488280;
}

.abt{
  margin-top: 30px;
  margin-left: -60px;
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

        display: flex;
        justify-content: left;
        align-items: left;
        flex-wrap: wrap;
        margin-left: 60px;
/*        min-height: 100vh;*/
}
.alb {
    height: 270px;
}
.alb img {
    width: 100%;
    height: 100%;
    /* box-shadow:2px 2px 2px 2px #375554; */
}

.alb img:hover{
  box-shadow: 1px 2px 10px 5px #375545;

}

.card1{
  width: 370px;
  height: 470px;
  box-shadow: 3px 4px 10px #b3c5c6;
  background: #fafafa;
  margin-left: 70px;
  margin-top: 50px;
}
.about{
  text-align: justify;
  margin-left: 7px;
  margin-top: -15;
  font-size: 18px;
}
.title{
  margin-left: 7px;
/*  margin-top: -23;*/
  text-align: left;
  font-size: 18px;

}
.price{
  margin-left: 7px;
/*  margin-top: -23;*/
  text-align: left;
  font-size: 18px;

}
.artistName{
  margin-left: 7px;
  margin-top: 30;
  text-align: left;
  font-size: 18px;
}



    </style>

<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>

<body>
 <!-- header -->
    <nav class ="menu">
      <a href="../../index.php"><img class="image" src="../6.jpg"></a>
    </nav>
      <div class="profile">
        <ul class="uls">
          <li class="ulsList">
            <!-- <a href="login.php" class="pro z-depth-2">Profile</a> -->
                  <img class="image_profile" src="../../image/main.png">
          <ul class="dropdown">
            <li><h6 style="margin-left: 17px; color: #488280; text-align: left;"><b>Welcome <span><?php echo $_SESSION['name']?> !</span></b></h6></li>
            <hr>
            <li><a href="addArt.php">Add Art <b>+</b></a></li>
            <li><a href="../ArtistPage.php">Back To Artist Page</a></li>
            <!-- <li><a href="#">Recovery Password</a></li>
            <li><a href="delete.php">Delete Account</a></li> -->

            <li><a href="../logout.php">Log Out</a></li>

          </ul>
          </li>
        </ul>
      </div>


      <div class="profile">
        <ul class="ulsleft">
          <li class="ulsList">
                  <img class="image_menu" src="../../image/menubar.png">
          <ul class="dropdown">
            <!-- <li><a href="#">Favourites</a></li> -->
            <li><a href="../viewArt.php">Art</a></li>
            <li><a href="../Artist.php">Artist</a></li>
            <li><a href="../Gallery.php">Gallery</a></li>
            <!-- <li><a href="#">Upcoming Shows</a></li>
            <li><a href="#">Ongoing Shows</a></li>
            <li><a href="#">Previous Shows</a></li>
 -->
          </ul>
          </li>
        </ul>
      </div>




  <hr class="hor">

  

  <!-- searchbox -->
  <!-- searchbox -->
  <form action="personalArtView.php" method="GET">
    <div class="search-box">
      <input type="hidden" name="search" />
            <input class="search-txt"  type="text" name="search" placeholder="Type to search" style="text-align: center;">
            <a type="submit" href="personalArtView.php" class="search-btn">
                <i class="fas fa-search"></i>
</a>
    </div>
</form>
  
  
  
  
  
  <br>
  <br>

  
  
  
  <!-- artshow -->
  
  <div class="artShow">
        <?php 
          $user = $_SESSION['id'];
            $sql = "SELECT u.name as u_name, a.* FROM user_form as u INNER JOIN art as a ON u.id=a.user where u.id='$user'";
            $res = mysqli_query($conn,  $sql);
  
            if (mysqli_num_rows($res) > 0) {
              while ($images = mysqli_fetch_assoc($res)) {  ?>
              
              <div class="card1"> 
                 <div class="alb">
                    <img src="../uploads/<?=$images['url']?>">
                   <br>
                 </div>

                 <div class="title">
                  <p><b>Name: </b><?php echo $images['name'] ?></p>

                   
                 </div>
                 <div class="about">
                   <p><b>Date: </b><?php echo $images['date1'] ?></p>
                   
                 </div>
                 
                 <div class="price">
                   <p style="font-size:18px"><b>&#36</b><?php echo $images['price'] ?></p>
                 </div>
              </div>
                  
          <?php } }

                else{
                ?>
                   <h5 style="margin-left: 43%;color: #375554;">No Art added yet.</h5>
                <?php
                        }
                ?>
    </div>
  
  
  
  
  
  
  <!-- footer -->
  <!--  <div class="ft1">
    <p ><h2 class="sp" style="color:#555555; margin-left: 20px;"><b>SUPPORT</b></h2></p>
    <footer class="section">
      <div class="contact">
      <a href="../../contact us page\ContactUs\contact_us.php" class="contactbtn"style="color:# 555555; margin-top: -410px; margin-left: 20px;">Contact Us</a>
    </div>
  
    <div class="faq">
      <a href="../../faq us page\faq_Us\faq_us.php" class="contactbtn"style="color:#555555;   margin-left: 20px;margin-top: -230px;">FAQ</a>
    </div>
  
    <div class="abt">
      <a href="../../About us page\About_us\About_us.php" class="contactbtn"style="color:#  555555; margin-left: 20px;">About Us</a>
    </div> 
  
    <div class="social">
      <a href="http://facebook.com"><img class="fa image1" src="../../image\fb1.png" ></a>
    <a href="http://instagram.com"><img class="fa image3"  src="../../image\ins1.png" ></a>
    <a href="http://twitter.com"><img class="fa image2" src="../../image\tw1.png" ></a>
    </div>

  </footer>
  </div> -->

<p ><h5 class="sp" style="color:#555555; margin-left: 20px;"><b>SUPPORT</b></h5></p>



  <footer class="section">

  
  <div class="social">
    <a href="http://facebook.com"><img class="fa image1" src="../../image\fb1.png" ></a>
  <a href="http://instagram.com"><img class="fa image3"  src="../../image\ins1.png" ></a>
  <a href="http://twitter.com"><img class="fa image2" src="../../image\tw1.png" ></a>
  </div>
  

  <div class="contact">
    <a href="../contact us page\ContactUs\contact_us.php" class="contactbtn"style="color:#555555; margin-top: -250px; margin-left: 20px;">Contact Us</a>
  </div>

  <div class="faq">
    <a href="../faq us page\faq_Us\faq_us.php" class="contactbtn"style="color:#555555; margin-left: 20px;">FAQ</a>
  
    <div class="abt">
    <a href="../About us page\About_us\About_us.php" class="contactbtn"style="color:#555555; margin-left: 20px;">About Us</a>
  </div>   
  </div>
  
  
</footer>
 

</body>
</html>


