<?php
require_once"dbconfig.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>KASA</title>
     <link rel="stylesheet" href="about_style.css">
     <link href="style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="css/responsive/responsive.css" rel="stylesheet">
<script src="jquery.min.js"></script>
    <script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();
aler(query);           
           if(query != '')  
           {  
                $.ajax({  
                     url:"searchinput.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                          
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      }); 

$('.navbar-light .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
    });   
 });  
 </script>  
 <style>
     img{
         height: 120px;
     }
     </style>
</head>
<body>
    <div id="preloader">
        <div class="dorne-load"></div>
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
    <section class="contact" id="contact" style="background-image: linear-gradient(to bottom, rgba(255,255,0,0.5), rgba(100,0,100,0.5)),
  url('img/orangesback.jpg')">
        <br>
        <br><br>
        <br>
        <br>
        <br><br>
        <br>
        <h1 style="border: 1px solid red;  outline: 5px dotted green; padding-top:20px; background: #F8F2DC; padding-right: 60px; padding-bottom: 10px; text-align: center;"> <span style="text-align: center; text-transform: uppercase; padding:0rem; font-size: 3.5rem; padding-bottom: 2rem; color:#01949A;">About</span><a style="text-align: center;color:#014E51; text-transform: uppercase; padding:0rem; font-size: 3.5rem; padding-bottom: 2rem;"> us </a></h1><br>
        <form>
            <div class="content">
                <p style="font-size: 20px; margin:20px 20px 20px 20px; color: #0e4142; text-transform: none;">The major objective of most grocery store companies is to sell products and earn the highest profits possible. However, grocery store owners face major competition from other retailers like restaurants and mass merchandisers.<br>
                An online grocery shop aims at delivering the best quality grocery items directly to customer's doorstep at competitive prices. Users in this case have the ability to order products from the company's website and choose a time slot for the delivery.
                During the pandemic, accessing grocery stores have been more difficult. So, for the grocery store to be able to sell their product online and have it delivered, would really help the shop owners. <br>
                <span style="text-transform: none; font-weight: bold;">That's why we have developed this website to help faciliate the process.</span></p>
            </div>
            <br><br><br>
            <h1 style=" padding-right: 60px; padding-bottom: 10px;"><span style="text-align: center; text-transform: uppercase; padding:0rem; font-size: 3.5rem; padding-bottom: 2rem; color:#01949A;">Our</span><a style="text-align: center;color:#014E51; text-transform: uppercase; padding:0rem; font-size: 3.5rem; padding-bottom: 2rem;"> Team </a></h1><br>
            <div class="team">
                <div class="card">
                    <div class="card-content">
                        <div class="image">
                            <img src="img/pic1.jpg" height="150px">
                        </div>
                        <div class="card-text">
                            <h3>Sneha Subramanian</h3>
                            <p>19BCE2462</p>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="image">
                            <img src="img/pic2.jpg" height="120px">
                        </div>
                        <div class="card-text">
                            <h3>Keerthana Rajeev</h3>
                            <p>19BCE2448</p>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="image">
                            <img src="img/pic3.jpg" height="120px">
                        </div>
                        <div class="card-text">
                            <h3>Amit Kumar Singh</h3>
                            <p>19BCE2611</p>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="image">
                            <img src="img/pic4.jpg" height="120px">
                        </div>
                        <div class="card-text">
                            <h3>Arshi Verma</h3>
                            <p>19BCE2340</p>
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <a style="color: white;" href="#" class="logo"><i class="fas fa-shopping-basket" style="color: #01949A"></i >KASA</a>
                <p>Online grocery shopping made easy by KASA Groceries!</p>
                <div class="share">
                    <a href="#" class="btn fab fa-facebook-f"></a>
                    <a href="#" class="btn fab fa-twitter"></a>
                    <a href="#" class="btn fab fa-instagram"></a>
                    <a href="#" class="btn fab fa-linkedin"></a>
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
                    <a href="index.html">home</a>
                    <a href="index.html">category</a>
                    <a href="index.html">product</a>
                    <a href="about.html">About us</a>
                    <a href="deals.html">deal</a>
                    <a href="faq.html">FAQ</a>
                    <a href="contact.html">contact</a>
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

        <!-- jQuery-2.2.4 js -->
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