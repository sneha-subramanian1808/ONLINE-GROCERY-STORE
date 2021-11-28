<?php
require_once"dbconfig.php";
//$result=select("select * from items where itemid='".$_REQUEST['id']."'")
$q="SELECT * FROM items where category='".$_REQUEST['cat']."'";
$result=select($q);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="about_style.css">
    <title>KASA</title>
    
    <link href="style.css" rel="stylesheet">

  
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
  
    <div id="preloader">
        <div class="dorne-load"></div>
    </div>

  
    <div class="dorne-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <header style="background-color: #014E51" class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a href="index.php" class="outline">KASA</a>
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="dorneNav">
                            <ul class="navbar-nav mr-auto" id="dorneMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
                                </li>
                                
                            </ul>
                             <div class="dorne-signin-btn">
                               <?php
                               if(isset($_SESSION['login']))
                               {
                                   ?><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                              
                                <a class="nav-link" href="faq.php">FAQ</a>
                                <a class="nav-link" href="about.php">About Us</a>
                                <a class="nav-link" href="mycart.php">My Cart</a>
                                <a class="nav-link" href="category.php">Category</a>
                              
                                    <a class="nav-link" href="logout.php">Logout</a>
                                    
                                    
                               
                                   
                                   <?php
                               }
                                   else
                                   {
                                       ?>
                                       <a href="ragister.php">Sign in or Register</a>
                                       <a class="nav-link" href="faq.php">FAQ</a>
                                <a class="nav-link" href="about.php">About Us</a>
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                <a class="nav-link" href="category.php">Category</a>
                              
                                   <?php
                                   }
                               
                               ?>
                                
                            </div>
                           
                            
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)"></div>
	</br>
    
	 <div class="row">
                <div class="col-12">
                    <div class="features-slides owl-carousel">
                     
					 <?php
					 while($r=mysqli_fetch_array($result))
					 {
						 extract($r);
					 ?>
                        <div class="single-features-area">
                            <a href="view_detail.php?id=<?=$itemid?>"><img src="admin/images/<?=$image?>" style="height:200px;width:400px">
                            <!-- Price -->
                            <div class="price-start">
                                </div>
                            <div class="feature-content d-flex align-items-center justify-content-between" style="height:150px">
                                <div class="feature-title">
								 <p><?=$Title?></p>
                               
                                   <h5><?=$price?>/-</h5></br>
								     </div>
                                
								<?php for($i=1;$i<=$item_rating;$i++) :  ?>

								<i class="fa fa-star" style="color:red" aria-hidden="true"></i>
                               <?php  endfor; ?>
                                    
                            </div></a>
                        </div>
						<?php
					 }
						?>
                        
                        
                    </div>
                </div>
            </div>
	
            <section class="footer" style="background-image:
  linear-gradient(to bottom, rgba(255,255,0,0.5), rgba(100,0,100,0.5)),
  url('img/orangesback.jpg')"> 
        <div class="box-container">
            <div class="box">
                <a style="color: white;" href="#" class="logo"><i class="fas fa-shopping-basket"></i >KASA</a>
                <p>Online grocery shopping made easy by KASA Groceries!</p>
                <div style="padding:0; height:4rem; width:4rem; line-height: 4rem; text-align: center">
                    <a href="#" style="color: blue; font-size: 15px;" class="btn fab fa-facebook-f"></a>
                    <a href="#" style="color: red; font-size: 15px;" class="btn fab fa-twitter"></a>
                    <a href="#" style="color: cyan; font-size: 15px;" class="btn fab fa-instagram"></a>
                    <a href="#" style="color: #82ddf0; font-size: 15px;" class="btn fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <h3 style="color: white;">our location</h3>
                <div class="links">
                    <a href="#">india</a>
                    <a href="#">USA</a>
                    <a href="#">france</a>
                    <a href="#">japan</a>
                    <a href="#">russia</a>
                </div>
            </div>
            <div class="box">
                <h3 style="color: white;">quick links</h3>
                <div class="links">
                    <a href="index.php">home</a>
                    <a href="index.php">category</a>
                    <a href="index.php">product</a>
                    <a href="about.php">About us</a>
                    <a href="faq.php">FAQ</a>
                </div>
            </div>
            <div class="box">
                <h3 style="color: white;">download app</h3>
                <div class="links">
                    <a href="#">google play</a>
                    <a href="#">window xp</a>
                    <a href="#">app store</a>
                </div>
            </div>
        </div>
        <h1 class="credit" style="color:white"> Created by <span> KASA ❤️ </span> | All rights reserved! </h1>
    </section>    


  
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>