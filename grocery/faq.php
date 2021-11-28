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

    <section class="contact" id="contact">
        <br><br><br><br><br><br><br><br>
        <h1 class="heading" style="border: 1px solid red; outline: 5px dotted green; padding-top:20px; background: #F8F2DC; padding-right: 60px; padding-bottom: 10px;"> <span style="text-align: center; text-transform: uppercase; padding:0rem; font-size: 3.5rem; padding-bottom: 2rem; color:#01949A;">Frequently Asked</span><a style="text-align: center;color:#014E51; text-transform: uppercase; padding:0rem; font-size: 3.5rem; padding-bottom: 2rem;"> Questions </a></h1><br>
        <form>
        <div class="faqs" style="padding: 0px 20px 20px;">
                <details style="background: #01949A; padding: 10px 20px; border-radius: 7px; margin-top: 20px; font-family: Rubik; font-size: 14px; letter-spacing: 1px; cursor: pointer">
                    <summary style="color:white;"><b> What about the home delivery services in COVID-19 lockdown time?</b></summary>
                    <p style="color: white; padding-top: 5px;"> We are giving our best to deliver the groceries on time, but because of Covid-19 rules, the delivery time may delay by a day.</p>
                </details>
                <details style="background: #01949A; padding: 10px 20px; border-radius: 7px; margin-top: 20px; font-family: Rubik; font-size: 14px; letter-spacing: 1px; cursor: pointer">
                    <summary style="color:white;"><b>How do I cancel an order?</b></summary>
                    <p style="color: white; padding-top: 5px;"> You can cancel an order online within & days of the order placed.</p>
                </details>
                <details style="background: #01949A; padding: 10px 20px; border-radius: 7px; margin-top: 20px; font-family: Rubik; font-size: 14px; letter-spacing: 1px; cursor: pointer">
                <summary style="color:white;"><b>What About COVID-19 related precautions?</b></summary>
                <p style="color: white; padding-top: 5px;">We take special precautions while packaging and delivery of products and it's on our high priority to take all precautions first. we maintain the special distancing while packaging and delivering to users' doorsteps.
                </p>
                </details>
                <details style="background: #01949A; padding: 10px 20px; border-radius: 7px; margin-top: 20px; font-family: Rubik; font-size: 14px; letter-spacing: 1px; cursor: pointer">
                <summary style="color:white;"><b>How good is the quality of the products?</b></summary>
                <p style="color: white; padding-top: 5px;">All products are manufactured and packed with high standards of quality check. However, if you are still not satisfied with the quality you may immediately return it at the time of delivery.
                </p>
                </details>
            </div>
        </form>
    </section>
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <a style="color: white;" href="#" class="logo"><i class="fas fa-shopping-basket"></i >KASA</a>
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