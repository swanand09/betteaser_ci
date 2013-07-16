<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr">
  <head>  
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>BetTeaser - <?php echo $template['title']; ?></title>

    <!-- Framework CSS -->
   <?php        
        echo css('reset.css',NULL,array('media'=>'screen,projection'));
        echo css('style.css',NULL,array('media'=>'screen,projection'));    
        echo css('JWslider.css',NULL,array('media'=>'screen,projection'));  
        echo js('jquery-1.10.2.min.js');
        echo js('mocha.js');
   ?>    
    
       <?php 
            echo favicon("favicon.ico");
       ?>

  </head>
  <body>
    
      <div id="header-stretch">
             <div id="header" class="container">
                 <h1><a href="index.php">BetTeaser</a></h1>                 <ul><li>Welcome pascal</li><li><a href="login.php?action=loggedout">&nbsp;&nbsp;|&nbsp;&nbsp;Sign Out</a></li></ul>             </div><!-- header -->
        </div><!-- header stretch -->
        <div id="menu-stretch">
            <div id="menu" class="container">
                 
                    <ul>
                        <li><a href="/betteaser">HOME</a></li>
                        <li><a href="/betteaser/racebook/">RACEBOOK</a></li>
                        <li><a href="#">DEPOSIT</a></li>
                        <li><a href="#">WITHDRAWAL</a></li>
                        <li><a href="#">BETTING GUIDE</a></li>
                        <li><a href="/betteaser/news">NEWS</a></li>
                        <li><a href="rules.php">RULES</a></li>
                        <li><a href="aboutus.php">ABOUT US</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                    </ul>            </div>
        </div><!-- Menu stretch-->
        <div id="slider-stretch">
             <div id="slider" class="container">
                    <div id="slidebanner-right" class="slider">
                        <img style="display: none;" class="image-0" src="images/sl/r/1.jpg" height="300" width="710">
                        <img style="display: none;" class="image-1" src="images/sl/r/2.jpg" height="300" width="710">
                        <img style="display: none;" class="image-2" src="images/sl/r/3.jpg" height="300" width="710">
                        <img style="display: inline;" class="image-3" src="images/sl/r/4.jpg" height="300" width="710">
                     </div>
                     <div id="slidebanner-left" class="sliderR">
                         <img class="thumb-0" src="images/sl/s/11.jpg">
                         <img class="thumb-1" src="images/sl/s/22.jpg">
                         <img class="thumb-2" src="images/sl/s/33.jpg">
                         <img class="thumb-3" src="images/sl/s/44.jpg">
                     <img src="images/sl/s/11.jpg"><img src="images/sl/s/22.jpg"><img src="images/sl/s/33.jpg"></div>
                     <a href="#" id="next"></a>
              </div><!-- Slider -->
        </div><!-- Slider Stretch -->
        <div id="main-container" class="container">
            <div id="features">
                <a href="racebook/">
                    <div id="racebook" class="feature">
                        <h3>Image</h3>
                        <p>Enter to get the thrill of Mauritius national sport.</p>
                    </div>
                </a>
                <a href="#">
                    <div id="bettypes" class="feature">
                        <h2>Bet Types</h2>
                        <h3>Image</h3>
                        <p>Learn our wide bet types and enjoy the Champ de Mars fever.</p>
                    </div>
                </a>
                <a href="news/">
                    <div id="latestnews" class="feature">
                        <h2>News</h2>
                        <h3>Image</h3>
                        <p>Read the latest news and tips from our racing experts.</p>
                    </div>
                </a>
                <a href="promo.php">
                    <div id="promo" class="feature">
                        <h2>Promo</h2>
                        <h3>Image</h3>
                        <p>Click here to learn the latest available promotions.</p>
                    </div>
                </a>
            </div><!-- features -->
            <img src="images/paymethods.gif" alt="payment">
        </div><!-- main container -->

        
        <div id="footer-stretch">
            <div id="footer" class="container">
               
Copyright &copy; 2013 BetTeaser International Ltd<br><br>PLEASE BET RESPONSIBLY | 18+ |<br><br>
               BetTeaser.com is an online sportsbook and gambling destination, we are a fully licensed sports betting website.            </div><!-- footer -->
        </div><!-- footer-stretch -->
      
  </body>
</html>
