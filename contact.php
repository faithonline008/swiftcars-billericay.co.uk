<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>Swift Cars - Contact</title>
    <link rel="shortcut icon" href="">

    <link href="css\bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css\style1.css" rel="stylesheet" type="text/css">
    <link href="css\font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css\responsive.css" rel="stylesheet" type="text/css">
    <link href="css\style2.css" rel="stylesheet">
    <link href="css\font.css" rel="stylesheet">
    <link href="css\default2.css" rel="stylesheet">  
    <link href="css\responsive.css" rel="stylesheet" type="text/css">   
    <link href="css\customize.css" rel="stylesheet">
    <script type="text/javascript" src="js\jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js\bootstrap.js"></script>
    <script type="text/javascript">
        $(document).ready(function ($) {
            var offset = 200;
            var duration = 500;
            $(window).scroll(function () {
                if ($(this).scrollTop() > offset) {
                    $('.back-to-top').fadeIn(400);
                } else {
                    $('.back-to-top').fadeOut(400);
                }
            });
            $('.back-to-top').click(function (event) {
                event.preventDefault();
                $('html, body').animate({ scrollTop: 0 }, 600);
                return false;
            })
        });
    </script>

</head>
<body>
    


       <header>
            <nav class="main-nav-outer" id="test">
                <!--main-nav-start-->
              
                <div class="top">
                    <div class="container">
                        <div class="col-md-4 col-sm-12">
                            <div class=" small-logo">
                                <a href="index.php">
                                    <img src="images\swiftcars-logo.png" class="img-responsive"></a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <ul class="top-right-info-w3ls">
                                <li>
                                    <span>Email</span>
                                      <a href="mailto:info@swiftcarsbillericay.co.uk">
                                          info@swiftcarsbillericay.co.uk
                                      </a>
                                </li>
                                <li class="call-now">
                                    <span class="lbl-text">Call Us</span>
                                    <a href="">01277 757575</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
             

                 <div class="navigation">
            <div class="container">
                <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                <div class="row collapse navbar-collapse" id="menu">
                    
                    <ul id="ctl00_MenuControlStatic" class="nav navbar-nav navbar-right nav-set2">


                <li class="" runat="server" id="index"><a href="index.php">Home</a></li>
                <li class="" runat="server" id="about"><a href="about.html">About</a></li>
                <li class="" runat="server" id="pricing"><a href="pricing.php">Pricing</a></li>
                <li class="" runat="server" id="contact"><a href="contact.php">Contact</a></li>

      </ul>
                   <!-- <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>-->
                </div>
            </div>
        </div>


            </nav>
            <!--main-nav-end-->
        </header>

        
        
    


    <section class="homecontentbg2" id="contact">
        <div class="container main-section contact">

           <div class="row">
                <span id="ctl00_ContentPlaceHolder1_lblerror" style="color: Red;"></span>
                <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                    <div class="contact-info-box address clearfix">
                        <h3><i class=" icon-map-marker"></i>Address:</h3>
                        <span>
                            <span id="ctl00_ContentPlaceHolder1_lblContactAddress">14 Radford Cres, Billericay CM12 0DG</span></span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3><i class="fa-phone"></i>Phone:</h3>
                        <span>
                            <span id="ctl00_ContentPlaceHolder1_lblphonenumber">01277757575</span> 
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa-pencil"></i>Email:</h3>
                        <span>
                            <span id="ctl00_ContentPlaceHolder1_lblContactEmail">info@swiftcarsbillericay.co.uk      </span></span>
                    </div>
                    <div class="contact-info-box email clearfix">
                        <h3><i class="fa-globe"></i>Web:</h3>
                        <span>
                            <span id="ctl00_ContentPlaceHolder1_lblWebsiteURL">www.swiftcars-billericay.co.uk</span></span>
                    </div>
                    <ul class="social-link">
                        
                        <li class="facebook"><a href="https://www.facebook.com/Swift-Cars-Billericay-107428617672097/"><i class="fa-facebook"></i></a></li>
                    </ul>
                </div>
               
                <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                <div>
                    <?php 

                        $msg = "";
                        if (isset($_GET['error'])) {
                            $msg = "Please Fill The Form";
                            echo '<div class="alert alert-danger">'.$msg.'</div>';
                        }

                        if (isset($_GET['success'])) {
                            $msg = "Your Message Has Been Sent";
                            echo '<div class="alert alert-success">'.$msg.'</div>';
                        }


                     ?>
                </div>
                    <div class="form2">

                        <div class="form2">

                            <form action="process.php" method="post">

                                <div class="form-group">
                                    
                                    <input name="name" type="text" id="" class="form-control input-text" placeholder="Your Name" >                                 
                                </div>

                                <div class="form-group">
                                    
                                    <input name="email" type="email" id="" class="form-control input-text" placeholder="Your Email" >
                                    
                                </div>

                                <div class="form-group">
                                    
                                    <input name="subject" type="text" id="" class="form-control input-text" placeholder="Subject" >
                                    
                                </div>

                                <div class="form-group">
                                    
                                    <textarea name="msg" rows="5" cols="20" id="" class="form-control input-text text-area" placeholder="Message" >
                                    </textarea>
                                   
                                </div>

                                <div class="text-center">
                                    <input type="submit" name="btn-send" value="Send Message" id="" class="input-btn">
                                </div>


                              </form>

                            </div> <!-- /.form2 -->
                    </div>
                </div>


    <!-- Contact Form end -->
            











            </div>
        </div>
    </section>

     
  <div class="responsive-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d618.9423707563917!2d0.4499360844937726!3d51.64574656220741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x826dd18148c549e9!2sOaklnds%20Farm%20Estate!5e0!3m2!1sen!2suk!4v1616064847330!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

         

        
        <footer class="footer">
            <div class="container">
              <div class="row">
                
              </div>
                <span class="copyright">&#169; 2021 Swift Cars. ALL RIGHTS RESERVED.<br>
                    POWERED BY: <a href="https://swiftcars-billericay.co.uk/" target="_blank" class="a">Swift Cars</a>
                </span>
            </div>
        </footer>


            <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a> 
      

        <script>
            wow = new WOW(
              {
                  animateClass: 'animated',
                  offset: 100
              }
            );
            wow.init();
        </script>


        <script type="text/javascript">
            $(window).load(function () {

                $('.main-nav li a, .servicelink').bind('click', function (event) {
                    var $anchor = $(this);

                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top - 102
                    }, 1500, 'easeInOutExpo');
                    /*
                    if you don't want to use the easing effects:
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1000);
                    */
                    if ($(window).width() < 768) {
                        $('.main-nav').hide();
                    }
                    event.preventDefault();
                });
            })
        </script>
    </form>
</body>
</html>
