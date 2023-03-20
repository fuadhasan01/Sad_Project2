<?php 
include("Product.php");
$product = new Product();
include('header.php');

?>

<title>filter</title>

<link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
<link rel="stylesheet" type='text/css' href="css/style.css">       



<!-- header -->
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
<body style="background: #c6d4d4" >
   <nav class ="menu">
      <a href="../index.php"><img class="image" src="../6.jpg"></a>
         
      
   </nav>

      
 <hr class="hori">









<div class="content"> 
	<div class="container-fluid">
				
            <form method="post" id="search_form">               
                <div class="row">                    
                    <aside class="col-lg-3 col-md-4">						
                    <div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true">Sort By </h3></div>
                            <div class="panel-body collapse in" id="panelOne">
								<div class="radio disabled">
									<label><input type="radio" name="sorting" value="newest" <?php if(isset($_POST['sorting']) && ($_POST['sorting'] == 'newest' || $_POST['sorting'] == '')) {echo "checked";} ?> class="sort_rang sorting">Newest</label>
								</div> 
								<div class="radio">
									<label><input type="radio" name="sorting" value="low" <?php if(isset($_POST['sorting']) && $_POST['sorting'] == 'low') {echo "checked";} ?> class="sort_rang sorting">Price: Low to High</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="sorting" value="high" <?php if(isset($_POST['sorting']) && $_POST['sorting'] == 'high') {echo "checked";} ?> class="sort_rang sorting">Price: High to Low</label>
								</div>								                              
                            </div>
                        </div>
                    </aside>
                    <section class="col-lg-9 col-md-8">
                        <div class="row">
                            <div id="results"></div>
                        </div>
                    </section>
                </div>
				<input type="hidden" id="totalRecords" value="<?php echo $totalRecords; ?>">
            </form>
        </div>        
    </div>  


<script src="js/script.js"></script>	
<?php 
      include('../footer.php');
    ?>


