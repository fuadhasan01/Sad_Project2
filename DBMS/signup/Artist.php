<?php
@include 'config.php';
session_start();

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
  height: 200px;
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
  margin-left: 60px;
  margin-top: 80px;
  text-align: left;
  font-size: 18px;
}
.bart{
  display: flex;
}
.card2{
  width: 400px;
  height: 200px;
  box-shadow: 3px 4px 10px #b3c5c6;
  background: #fafafa;
  margin-left: 70px;
  margin-top: 50px;
  display: flex;
  margin-left: 200px;
}



    </style>

<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>
<body>
 <!-- header -->
    <nav class ="menu">
      <a href="../index.php"><img class="image" src="6.jpg"></a>
    </nav>
      <div class="profile">
        <ul class="uls">
          <li class="ulsList">
                  <img class="image_profile" src="../image/main.png">
          <ul class="dropdown">
            <li><h6 style="margin-left: 17px; color: #488280; text-align: left;"><b>Profile overview </b></h6></li>
            <hr>
            <li><a href="Edit Profile/editProfile.php">Edit Profile</a></li>
            <li><a href="Change Password/changePassword.php">Change Password</a></li>
            <!-- <li><a href="#">Forget Password</a></li> -->
            <li><a href="delete.php">Delete Account</a></li>
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
            <!-- <li><a href="#">Favourites</a></li> -->
            <li><a href="viewArt.php">Art</a></li>
            <!-- <li><a href="#">Artist</a></li> -->
            <li><a href="Gallery.php">Gallery</a></li>
            <!-- <li><a href="#">Upcoming Shows</a></li>
            <li><a href="#">Ongoing Shows</a></li>
            <li><a href="#">Previous Shows</a></li> -->

          </ul>
          </li>
        </ul>
      </div>




  <hr class="hor">






  <!-- searchbox -->
<form action="" method="GET">
  <div class="search-box">
            <input class="search-txt"  type="text" name="search" placeholder="Type to search" style="text-align: center;" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>">
            <a class="search-btn" href="#">
                <i class="fas fa-search"></i>
            </a>
    </div>
</form>
  


<br><br>
<div class="col-md-12">
                <div class="card mt-4">
                    <div class="stable card-body">
                        <table class="table">
                            
                            <tbody>
                                <?php 
                                    @include 'config.php';

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM user_form WHERE CONCAT( name,userName,email,user_type) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['userName']; ?></td>
                                                    <td><?= $items['email']; ?></td>
                                                    <td><?= $items['user_type']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


<br>
<br>



<!-- all Gallery show -->
    <div class="artShow">
          <?php
              // $sql = "SELECT u.name as u_name, a.* FROM user_form as u INNER JOIN art as a ON u.id=a.user";
              $sql = "SELECT name from user_form WHERE user_type LIKE 'Artist'";

              $res = mysqli_query($conn,  $sql);
    
              if (mysqli_num_rows($res) > 0) {
                while ($images = mysqli_fetch_assoc($res)) {  ?>
                 <!-- <a href="#"> -->
               <div class="card1"> 
                   
                 <div class="artistName">
                  <p><b>Artist Name : </b><?php echo $images['name'] ?></p>
                   
                 </div>
                 
              </div>
              <!-- </a>  -->
            <?php } }

                else{
                ?>
                   <h5 style="margin-left: 43%;color: #375554;">No Art added yet.</h5>
                <?php
                        }
                ?>
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


