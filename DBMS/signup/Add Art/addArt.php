<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Customer Sign up</title>

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
      margin-left: 36%;
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
   .form-btn{
      margin-left: 20px;
   }

   .hor{
   height: 3px;
   margin-top: 0px;
   background-color: white;
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
   .add{
      color: #375554;
   }
   .add:hover{
      text-shadow: 1px 2px 7px #375554;

   }


   </style>

</head>
<body >
   <nav class ="menu">
      <a href="../../index.php"><img class="image" src="../6.jpg"></a>
   
   </nav>

  <hr class="hor">
    
   



<div class="form-container" style="background: linear-gradient(to bottom, #41716f 0%, #547f7d 10%, #678d8c 20%, #7a9c9a 30%, #8daaa9 40%, #ffffff 100%)">

   <form action="Art.php" method="post" enctype="multipart/form-data">
      <h2 class="add">Add Art</h2>
         <?php if (isset($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
         <?php endif ?>
      <input type="text" name="name" required placeholder="Art Title">
      <input type="text" name="price" required placeholder="Price">
      <input type="text" name="about" required placeholder="About">
      <select name="medium"  >
         <option selected disabled>Medium</option>
         <option value="watercolor">Watercolor</option>
         <option value="oil">Oil</option>
         <option value="mixed media">Mixed Media</option>
         <option value="charcoal">Charcoal</option>
         <option value="pencil">Pencil</option>
         <option value="pen">Pen</option>
         <option value="crayon">Crayon</option>
         <option value="acrylict paint">Acryclic paint</option>
         <option value="color pencil">Color pencil</option>
         <option value="wax">Wax</option>
         <option value="ceramic">Ceramic</option>
         <option value="marble">Marble</option>
         <option value="glass">Glass</option>
         <option value="others">Others</option>
      </select>


      <select name="color"  >
         <option selected disabled>Color</option>
         <option value="red">Red</option>
         <option value="orange">Orange</option>
         <option value="yellow">Yellow</option>
         <option value="green">Green</option>
         <option value="blue">Blue</option>
         <option value="purple">Purple</option>
         <option value="pink">Pink</option>
         <option value="brown">Brown</option>
         <option value="black">Black</option>
         <option value="white">White</option>
         <option value="others">Others</option>
      </select>
      <select name="style"  >
         <option selected disabled>Style</option>
         <option value="abstract">abstract</option>
         <option value="coceptual">coceptual</option>
         <option value="figuartive">figuartive</option>
         <option value="landscape">landscape</option>
         <option value="still life">still life</option>
         <option value="others">Others</option>
      </select>
      <select name="materials"  >
         <option selected disabled>Materials</option>
         <option value="canvas">canvas</option>
         <option value="wood">wood</option>
         <option value="paper">paper</option>
         <option value="metal">metal</option>
         <option value="ceramics">ceramics</option>
         <option value="glass">Glass</option>
         <option value="synthetic fibers">synthetic fibers</option>
         <option value="others">Others</option>
      </select>

       <select name="impasto"  >
         <option selected disabled>Impasto</option>
         <option value="small">Bold impasto</option>
         <option value="medium">Medium impasto</option>
         <option value="large">No impasto</option>
      </select>
         
    


   
      <select name="size"  >
         <option selected disabled>Size</option>
         <option value="small">Small</option>
         <option value="medium">Medium</option>
         <option value="large">Large</option>
         <option value="miniature">Miniature</option>
         
      </select>
      <input type="text" name="height" required placeholder="Height(cm.)">
      <input type="text" name="width" required placeholder="Width(cm.)">
      <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>" required placeholder="Created date" />
      <input class="artinput" type="file" name="my_image" placeholder="file" /><br>

      <input type="submit" name="submit" value="Upload Photo" class="form-btn">
      <!-- <p>Want to upload another photo?<a href="addArt.php" class="lgn"><b>Click here.</b></a></p> -->
    
   </form>
   </div>
   <?php 
      include('foot1.php');
    ?>

</body>
</html>