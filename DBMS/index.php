<!DOCTYPE html>
<html>
<head>

<style type="text/css">
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
	.brand{
    		background: whitesmoke !important;
    		
    	}
    	.brand-text{
    		color:black;
    		text-align: center;

    	}

	.text-center {
  width: 100%;
  height: 600px;
  position: absolute;
  left: 50%;
  top: 55%;
  margin-top: 20px;
  transform: translate(-50%,-50%);
  background-image: url('2.jpg');
  background-size: 100% 100%;
  box-shadow: 1px 2px 10px 5px #375554;
  animation: slider 20s infinite linear;
  opacity: 0.7;

}

@keyframes slider{
	30%{ background-image: url('3.jpg'); }
	60%{ background-image: url('4.png'); }
	/*40%{ background-image: url('8.jpg'); }
	60%{ background-image: url('12.jpg'); }
	80%{ background-image: url('10.jpg'); }
	100%{ background-image: url('13.jpg'); }*/
	
	
}

.textHomePage{
	color: white;
	font-size: 28px;
	font-weight:100;
	text-align: center;
	position: absolute;
	margin-top: 200px;
	margin-left: 250px;
	background-color: #488280;
	opacity: 0.7;
}


/*new css*/

   {
        box-sizing: border-box;
   }
.hor{
	height: 2px;
	margin-top: 3px;
	background-color: white;
}
.icon{
	margin-bottom: 0px;
	background-color: #488280;

}
.img1{
	height: 400px;
	width: 50%;
	margin-left: 20px;
	text-align: left;
	margin-top: 600px;
	transition: transform 1.2s;
	
}
.img1:hover{
	box-shadow: 1px 2px 10px 5px #375554;
	transform: scale(0.9);
}
.img1text{
	text-align: justify;
	margin-left: 810px;
	margin-right: 20px;
	margin-top: -350px;

}
.hor1{
	height: 2px;
	margin-top: 700px;
	background-color: #488280;
}
.intro{
	margin-top: -510px;
}

.hor2{
	height: 2px;
	margin-top: 200px;
	background-color: #488280;
}

.social{
	margin-left: 44.5%;
	margin-bottom: 10px;
	width: 200px;
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


.about{
	margin-top: 50px;
	display: flex;
}
.hor3{
	height: 2px;
	margin-left: 0px;
	background-color: #488280;
	width: 150px;
	text-align: left;
}


.au{
	margin-left: 20px;
	color: #375554;
	margin-top: 60px;
}
.au:hover{
	text-shadow: 3px 3px 8px #488280;
/*	letter-spacing: 3px;*/
}

#more {display: none;}
.acg{
	margin-left: 20px;
	margin-right: 25px;

}

.img{
	height: 450px;
	width: 462px;
	transition: transform 1.2s;
 
}
.img:hover{
	box-shadow: 1px 2px 10px 5px #375554;
	
	transform: scale(0.9);
}

.moretxt{
	text-align: left;
	width: 400px;
}

#more2 {display: none;}

.boxtext{
	color: #375554;
	margin-bottom: 10px;
}
.boxtext:hover{
/*	letter-spacing: 4px;*/
	color: #488280;
}
#more3 {display: none;}

.rdbutton:hover{
	background-color: #488280;
	color: white;
	box-shadow: 1px 2px 10px 5px #375554;
}

/*.contact{
	display: flex;
	font-weight: 200px;
	font-size: 20px;
	color:#555555;
	margin-top: 500px;
}

.contactbtn:hover{
	text-shadow: 3px 3px 8px #488280;
}

.faq{
   margin-bottom: 0px;
}

.Support{
	margin-top: 400px;
	margin-left: 20px;
	color:#555555;
	font-size: 20px;
	font-weight: 200px;
	font-family: sans-serif;




}
.Support:hover{
	text-shadow: 3px 3px 8px #488280;
}
*/


/*footercode*/

.social{
	margin-left: 44.5%;
  margin-top: 60px;
/*	width: 200px;*/
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
	margin-top: 80px;
}

.contactbtn:hover{
	text-shadow: 3px 3px 8px #488280;
}
.section{
	margin-top: 160px;
	font-family: "Poppins", sans-serif;
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
font-family: "Poppins", sans-serif;
font-size: 25px;
margin-top: 200px;



}
.sp:hover{
	text-shadow: 3px 3px 8px #488280;
}

.abt{
	margin-top: 30px;
	margin-left: -60px;
}

















 </style>


</head>


	<?php include('header.php') ?> 

<hr class="hor">
<div class="text-center">
	
</div>


 
<h3 class="textHomePage">
	"The artist is a receptacle for emotions that come from all over the place: from the sky,<br>from the earth, from a scrap of paper,from a passing shape,<br>from a spider's web. Inspiration exists, <br>but it has to find you working"<br>
	-PABLO PICASSO
</h3>

<!-- new code -->


	<hr class="hor1">
	<div class="intro">
		<img class="img1" src="image/1.png">
	<h5 class="img1text">
	<b>ART PATIO:</b> <br><br>
	Art is the maneuver where human demonstrates their own thought, viewpoint, concepts through creative and imaginative talent. It is the unique sector where we get the opportunity to see how beguiling human brain works
	To preserve this field in a way that creativeness gets the highest priority along with technological benefit we decided to create “ART PATIO”. It is a digital platform where artist like you can represent your visionary to the whole world.
</h5>
	</div>
<hr class="hor2">

<!-- about -->

<h5 class="au">Our Services: <hr class="hor3"></h5>
<div class="about">
	
	<div class="acg">
		<h5 class="boxtext">Artist:</h5>
		<img class="img" src="image/art2.png">
		<p class="moretxt">
		<span id="more">Artist are in control of their own world.
As an artist your online brand should be in your
control too.
Whether you’re a painter, designer, photographer, or musician, it’s important that your talent is well represented on both social media and your website.

Fortunately, Art Patio has made it easier and more affordable for creative professionals to share their portfolios online.
By this  platform you will be able to showcase your ideas and creativity to the whole world
</span></p>
		<button class="rdbutton" onclick="myFunction()" id="myBtn">Read more</button>


	</div>

	<div class="acg">
		<h5 class="boxtext">Customer:</h5>
		<img class="img" src="image/customer1.jpg">
		<p class="moretxt">
		<span id="more2">Are you a fan of art and appreciate works and beautiful things?
Then, its the perfect platform for you.
There are thousands of works that expresses emotions,moods and stories in a large aspect.
To enjoy a larger than life experience go ahead and check out our platform so that you can encounter with your favorite art, artist or gallery.


</span></p>
		<button class="rdbutton" onclick="myFunction2()" id="myBtn2">Read more</button>


	</div>

	<div class="acg">
		<h5 class="boxtext">Gallery:</h5>
		<img class="img" src="image/gallery1.jpg">
		<p class="moretxt">
		<span id="more3">To showcase and represent arts virtually Art Patio is the ideal platform.
		Here you can engage with potential customers and artist. Gallry can also be exhibited and open to the public for viewing.

		 </span></p>
		<button class="rdbutton" onclick="myFunction3()" id="myBtn3">Read more</button>


	</div>


</div>



<script>
function myFunction() {
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (more.style.display === "none") {
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  } else {
    moreText.style.display = "none";
    btnText.innerHTML = "Read more";    
  }
}

function myFunction2() {
  var moreText = document.getElementById("more2");
  var btnText = document.getElementById("myBtn2");

  if (more2.style.display === "none") {
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  } else {
    moreText.style.display = "none";
    btnText.innerHTML = "Read more";    
  }
}

function myFunction3() {
  var moreText = document.getElementById("more3");
  var btnText = document.getElementById("myBtn3");

  if (more3.style.display === "none") {
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  } else {
    moreText.style.display = "none";
    btnText.innerHTML = "Read more";    
  }
}



</script>




<p class="sp" style="color:#555555;"><b>SUPPORT</b></p>
<footer class="section">

	<!-- <div class="center #375554-text x" style="color:#375554">Copyright from @2022</div> -->
	
	

	<div class="contact">
		<a href="contact us page\ContactUs\contact_us.php" class="contactbtn"style="color:#555555; margin-top: -250px; margin-left: 20px;">Contact Us</a>
	</div>

	<div class="faq">
		<a href="faq us page\faq_Us\faq_us.php" class="contactbtn"style="color:#555555; margin-left: 20px;">FAQ</a>
	
		<div class="abt">
		<a href="About us page\About_us\About_us.php" class="contactbtn"style="color:#555555; margin-left: 20px;">About Us</a>
	</div>   
	</div>
	<div class="social">
		<a href="http://facebook.com"><img class="fa image1" src="image\fb1.png" ></a>
	<a href="http://instagram.com"><img class="fa image3"  src="image\ins1.png" ></a>
	<a href="http://twitter.com"><img class="fa image2" src="image\tw1.png" ></a>
	</div>
	
	
</footer>

</body>





</html>