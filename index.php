<?php
    session_start();
    include 'z-config.php';

    //$sql = "SELECT * FROM page WHERE pageID = '55' ";   
    //$rs=mysql_fetch_array(mysql_query($sql));
 ?>   
 <? include 'z-functions.php' ?>
 <?
    $page='Homepage';
    $title='Bunty Gaming LLC';
    $parent='Bunty Gaming LLC';
    $parentURL='/';
    $metadescription = 'Bunty Gaming LLC is ';
    $metakeywords = 'Bunty Gaming LLC';
    $productName = '';
?>

<!DOCTYPE html>
<html lang="en">

<? include "z-head.php" ?>

<body>
  <!-- mega menu -->
		<? include "z-nav.php" ?>
<!-- Slider -->
<div id="section-1">
<div class="slidePoint" id="slide0" data-slide="1" data-stellar-background-ratio="0.5">
    <div class="padding_slide1">
        <div class="clearfix">
                    <div class="slide-contentfull">
                        <div class="fullwidthbanner-container">					
                            <div class="fullwidthbanner">
                                <ul>
                                   <li data-transition="fade" data-slotamount="10" data-thumb="#">                                      
                                        <img src="images/slide.jpg" alt=""/>     
                                   
                                        <div class="caption lft medium_black" data-x="70" data-y="190" data-speed="400" data-start="1000" data-easing="easeOutExpo"><p class="blackbold">RESPONSIVE</p></div>
                                        <div class="caption fade medium_black" data-x="70" data-y="300" data-speed="600" data-start="1500" data-easing="easeInOutElastic"><p>TOUCH SWIPE NAVIGATION</p></div>
                                        <div class="caption sfr small_text_desc" data-x="530" data-y="350" data-speed="900" data-start="2500" data-easing="easeOutExpo">
                                            <p>Limited-time offer : </p> 
                                            <p>Deposit and free $20!</p>
                                        </div>
                                    </li>
                                    </ul>
                                <div class="tp-bannertimer"></div>												
                            </div>					
                        </div>    
                    </div>
                    <div class="clear"></div>
        </div>
    </div>
</div>
</div>
  <!-- Texas Holdem -->
  <div id="section-holdem" class="programinfo">
       <div class="container texas-space" id="games">
           <div class="clear"></div>
           <!-- tabs -->
           <div class="more">
           <ul class="ca-menu">
                    <li>
                        <a href="/games.php">
                            <div class="img-content"><img class="ca-icon" src="/images/banilla.png" alt="" /></div>
                            <div class="clear"></div>
                            <div class="ca-content">
                                <h2 class="ca-main">Banilla Games</h2>
                                 <p class="center">Makers of the popular Diamond Skill Games Series</p>
                                <h3 class="ca-sub">Click Here for More</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/games.php">
                            <div class="img-content"><img style="width:250px; height:250px;" class="ca-icon" src="/images/primero.png" alt="" /></div>
                            <div class="clear"></div>
                            <div class="ca-content">
                                <h2 class="ca-main">Primero Games</h2>
                               <p class="center"> A leading providers of games and game cabinets </p>
                                <h3 class="ca-sub">Click Here for More</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/compliance.php">
                            <div class="img-content"><img style="width:200px; height:150px" class="ca-icon" id="bump" src="/images/galottery.png" alt="" /></div>
                            <div class="clear"></div>
                            <div class="ca-content">
                                <h2 class="ca-main">Compliance</h2>
                                <p class="center">Neccessary items from the Georgia Lottery COAM Division</p>
                                <h3 class="ca-sub">Click Here for More</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/contact.php">
                            <div class="img-content"><img class="ca-icon" src="/images/customer-service.png" alt="" /></div>
                            <div class="ca-content">
                                <h2 class="ca-main">Contact Us</h2>
                                <p class="center">Our top notch customer service is here 24/7</p>
                                <h3 class="ca-sub">Professionals in action</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
             <div class="clear"></div>
      </div>
  </div>
            
                
<? include "z-footer.php" ?>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
    <script src="js/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
    <script src="js/scroll/jquery.bxslider.js" type="text/javascript"></script>
    <script>
        $(document).ready(function () {
            "use strict";
            $('.slider1').bxSlider({
                slideWidth: 350,
                slideHeight: '100%',
                minSlides: 2,
                maxSlides: 3,
                slideMargin: 10
            });
        });
    </script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/slide/jquery.themepunch.plugins.min.js"></script>			
    <script type="text/javascript" src="js/slide/jquery.themepunch.revolution.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script>	
    <script src="js/screen.js" type="text/javascript"></script>
    
    <script src="js/jquery.nav1.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () { "use strict"; $('#Grid_top').mixitup(); });
        $(function () { "use strict"; $('#Grid').mixitup(); });
    </script>

    <!-- Contact Form -->
    <script type="text/javascript">
        $(document).ready(function () {
            $(function () {
                "use strict";
                $('#contact_form').submit(function (e) {
                    e.preventDefault();
                    var form = $(this);
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var text = $("#message").val();
                    var dataString = 'name=' + name + '&email=' + email + '&message=' + text;
                    function isValidEmail(emailAddress) {
                        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
                        return pattern.test(emailAddress);
                    };
                    if (isValidEmail(email) && (text.length > 20) && (name.length > 1)) {
                        $.ajax({
                            type: 'POST',
                            url: "contact_form/contact_process.php",
                            data: dataString,
                            success: function () {
                                $('.success').fadeIn(1000);
                            }
                        });
                    } else {
                        $('.error').fadeIn(1000);
                    }
                });
            });
        });
    </script>

</body>
</html>