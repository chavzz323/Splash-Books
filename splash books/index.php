<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Splash Books</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="https://kit.fontawesome.com/dbcb78a2d6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body >

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a style="text-decoration: none;font-weight: bold; font-size: 1.5rem;"href="index.php" >Splash Books</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a style="text-decoration: none;" href="about.php">About</a></li>
          <li><a style="text-decoration: none;"href="products.php">Products</a></li>
          <li><a style="text-decoration: none;"href="cart.php">View Cart</a></li>
          <li><a style="text-decoration: none;"href="orders.php">My Orders</a></li>
          <li><a style="text-decoration: none;"href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>



    <img src="images/ladyy.jpg" style="width: 100%; ">
    <center>
      <div class="hahh">
    <h1 class="He" style=" padding-left: 2rem; padding-right: 2rem;color:#0078A0; font-size: 3.5rem; margin-top: 56px; margin-bottom: 50px; ">There is no Friend as loyal, as a book.</h1>

    <div class="row" style=" padding-left: 2rem; padding-right: 2rem;color:#0078A0;  margin-top: 50px;">
    <div>
    <h1 class="H"  style=" padding-left: 2rem; padding-right: 2rem;color:#0078A0; font-size: 3rem; ">Read new and interesting Novels</h1>
      </div>
      <div  >
          <h1 class="any" style=" padding-bottom: -6rem;padding-left: 2rem; padding-right: 2rem;color:#0078A0; font-size: 3rem; margin-top: 50px;">Any Types of Novels</h1>
        </div>
      </div>

  </div>
  </center>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">


      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>


    <section id="features">

      <center>
            <div class="container hahh">
              <div class="row  features">
            <div class="col-lg-4 col-md-6">
                  <i class="fas fa-check-double fa-2xl icon3"></i>
                  <h3 class="text-feat">Easy to use</h3>
                  <p class="text-ture">"So easy to used"</p>
                </div>
              <div class="col-lg-4 col-md-6">
                  <i class="fas fa-book-open fa-2xl icon3"></i>
                  <h3 class="text-feat"> Top Novels</h3>
                  <p class="text-ture">World class Novel</p>
                </div>
                  <div class="col-lg-4 col-md-6">
                  <i class="fas fa-book-reader fa-2xl icon3"></i>
                  <h3 class="text-feat">Reading is Fun</h3>
                  <p class="text-ture">Reading is a conversation. All books talk but a good book listen as well."Mark Haddon"</p>
                </div>
              </div>

            </div>
          </center>
        </section>

        <div class="small-12 " style="margin-top:-100px; padding-top: 23px;background-color:#0078A0; height: 315px; width: 100%; ">

              <div  style="color: white; margin-bottom: 15px;">
                <p style="padding-left: 50px; font-size: 2.5rem; font-weight: bold;"> SPLASH BOOKS </p>
                <p style="padding-left: 50px; margin-top: -1rem;"> Founded in 2022, we connect this vast and   </p>
                <p style="padding-left: 50px;  margin-top: -20px;"> diverse region through our technology,</p>
                <p style="padding-left: 50px;  margin-top: -20px;"> logistics and payments capabilities.</p>
              </div>
              <center>
                <div  class="sr_m" style="margin-top: 4rem; margin-bottom: 8px;">
                <a href="https://web.facebook.com/profile.php?id=100011066745578"><i style="margin-right: 5px; margin-top: -4rem;"class="fa-brands fa-facebook fa-2x"></i></a>
                <a href="https://www.instagram.com/cyprusjayyy_/"><i style="margin-right: 5px;" class="fa-brands fa-instagram fa-2x" ></i></a>
                <a href="https://twitter.com/"><i style="margin-right: 5px;" class="fa-brands fa-twitter fa-2x"></i></a>
                <a href="https://www.youtube.com/channel/UC-Owra7B6gK4dbYC3NzXMzw"><i style="margin-right: 5px;" class="fa-brands fa-youtube fa-2x"></i></a>
              </div>
            </center>

          <footer>
             <p class="fottt" style="margin-top: 1px; color: white; text-align:center; font-size:0.8em;">&copy; Splash Books. All Rights Reserved.</p>
          </footer>

        </div>



  </body>
</html>
