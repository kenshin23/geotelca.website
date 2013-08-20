<!DOCTYPE html>
<html lang="es-VE">
    <head>
        <meta charset="utf-8">
        <title>Geolog&iacute;a y Telecomunicaciones, C.A.</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="./assets/css/bootstrap.css" rel="stylesheet">
        <link href="./assets/css/bootstrap-responsive.css" rel="stylesheet">
        <style>

            /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            body {
                padding-bottom: 40px;
                color: #5a5a5a;
            }

            /* CUSTOMIZE THE NAVBAR
            -------------------------------------------------- */

            /* Special class on .container surrounding .navbar, used for positioning it into place. */
            .navbar-wrapper {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                z-index: 10;
                margin-top: 20px;
                margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
            }
            .navbar-wrapper .navbar {

            }

            /* Remove border and change up box shadow for more contrast */
            .navbar .navbar-inner {
                border: 0;
                -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
                   -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
                        box-shadow: 0 2px 10px rgba(0,0,0,.25);
            }

            /* Downsize the brand/project name a bit */
            .navbar .brand {
                padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
                font-size: 16px;
                font-weight: bold;
                text-shadow: 0 -1px 0 rgba(0,0,0,.5);
            }

            /* Navbar links: increase padding for taller navbar */
            .navbar .nav > li > a {
                padding: 15px 20px;
            }

            /* Offset the responsive button for proper vertical alignment */
            .navbar .btn-navbar {
                margin-top: 10px;
            }

            /* Add company id number text to navbar with correct formatting */
            .company-id {
                display: block;
                float: left;
                padding: 14px 20px 16px;
                margin-left: -20px;   
                color: #e7e7e7;
            }
            
            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
                margin-bottom: 60px;
            }

            .carousel .container {
                position: relative;
                z-index: 9;
            }

            .carousel-control {
                height: 80px;
                margin-top: 0;
                font-size: 120px;
                text-shadow: 0 1px 1px rgba(0,0,0,.4);
                background-color: transparent;
                border: 0;
                z-index: 10;
            }

            .carousel .item {
                height: 500px;
            }
            .carousel img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 500px;
            }

            .carousel-caption {
                background-color: transparent;
                position: static;
                max-width: 550px;
                padding: 0 20px;
                margin-top: 200px;
            }
            .carousel-caption h1,
            .carousel-caption .lead {
                margin: 0;
                line-height: 1.25;
                color: #000;
                text-shadow: 0 1px 1px rgba(0,0,0,.5);
                font-family: "Century Gothic", Arial, Helvetica;
                font-weight: bold;
            }
            .carousel-caption .btn {
                margin-top: 10px;
            }

            /* Logo overlay for carousel */
            .carousel-overlay {
                background: url('./assets/img/examples/geotelca-logo-226x136.png') top left no-repeat;
                position: absolute;
                top: 36%;
                left: 72%;
                width: 90%;
                height: 90%;
                z-index: 10;
                pointer-events: none;
            }
            
            @media (min-width: 768px) and (max-width: 979px) {
                .carousel-overlay{
                    background: url('./assets/img/examples/geotelca-logo-181x109.png') top left no-repeat;
                    top: 37%;
                    left: 74%;
                    width:30%;
                    height:50%;
                }
            }
            @media (max-width: 767px) {
                .carousel-overlay{
                    background: url('./assets/img/examples/geotelca-logo-90x54.png') top left no-repeat;
                    top: 36%;
                    left: 72%;
                    width:30%;
                    height:30%;
                }
            }
            @media (max-width: 480px) {
                .carousel-overlay{
                    top: 37%;
                    left: 72%;
                    width:30%;
                    height:30%;
                }
            }

            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Left align the text within the four columns below the carousel */
            .marketing .span3 {
                text-align: left;
            }
            .marketing h2 {
                text-align: center;
                font-weight: normal;
            }
            .marketing .span3 p {
                margin-left: 10px;
                margin-right: 10px;
            }

            /* Set of colored titles for the four columns */
            .title {
                color: #fff;
                -webkit-border-top-left-radius: 4px;
                    -moz-border-radius-topleft: 4px;
                        border-top-left-radius: 4px;
                -webkit-border-top-right-radius: 4px;
                    -moz-border-radius-topright: 4px;
                        border-top-right-radius: 4px;
                -webkit-box-shadow: 4px 4px 7px #000000;
                   -moz-box-shadow: 4px 4px 7px #000000;
                        box-shadow: 4px 4px 7px #000000;
            }
            .title-lightblue {
                background-color: #617EB9;
            }
            .title-purple {
                background-color: #501D50;
            }
            .title-orange {
                background-color: #D24619;
            }
            .title-lightorange {
                background-color: #DD9A33;
            }
            /* Featurettes
            ------------------------- */

            .featurette-divider {
                margin: 20px 0; /* Space out the Bootstrap <hr> more */
            }
            .featurette {
                padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
                overflow: hidden; /* Vertically center images part 2: clear their floats. */
            }
            .featurette-image {
                margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
            }

            /* Give some space on the sides of the floated elements so text doesn't run right into it. */
            .featurette-image.pull-left {
                margin-right: 40px;
            }
            .featurette-image.pull-right {
                margin-left: 40px;
            }

            /* Thin out the marketing headings */
            .featurette-heading {
                font-size: 50px;
                font-weight: 300;
                line-height: 1;
                letter-spacing: -1px;
            }

            /* FOOTER
            -------------------------------------------------- */
            /* Center align the text within the three columns inside the footer */
            .footer .span4 {
                text-align: center;
            }
            
            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (max-width: 979px) {

                .container.navbar-wrapper {
                    margin-bottom: 0;
                    width: auto;
                }
                .navbar-inner {
                    border-radius: 0;
                    margin: -20px 0;
                }

                .carousel .item {
                    height: 500px;
                }
                .carousel img {
                    width: auto;
                    height: 500px;
                }

                .marketing h2 {
                    font-size: 20px;
                }
                
                .featurette {
                    height: auto;
                    padding: 0;
                }
                .featurette-image.pull-left,
                .featurette-image.pull-right {
                    display: block;
                    float: none;
                    max-width: 40%;
                    margin: 0 auto 20px;
                }
            }


            @media (max-width: 767px) {

                .navbar-inner {
                    margin: -20px;
                }

                .company-id {
                    font-size: 8px;
                }
                
                .carousel {
                    margin-left: -20px;
                    margin-right: -20px;
                }
                .carousel .container {

                }
                .carousel .item {
                    height: 300px;
                }
                .carousel img {
                    height: 300px;
                }
                .carousel-caption {
                    width: 65%;
                    padding: 0 70px;
                    margin-top: 100px;
                }
                .carousel-caption h1 {
                    font-size: 30px;
                }
                .carousel-caption .lead,
                .carousel-caption .btn {
                    font-size: 18px;
                }

                .marketing .span3 + .span3 {
                    margin-top: 40px;
                }
                .marketing h2 {
                    font-size: 31.5px;
                }
                
                .featurette-heading {
                    font-size: 30px;
                }
                .featurette .lead {
                    font-size: 18px;
                    line-height: 1.5;
                }

            }
        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="./assets/js/html5shiv.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="./assets/ico/favicon.png">
    </head>

    <body>



        <!-- NAVBAR
        ================================================== -->
        <div class="navbar-wrapper">
            <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
            <div class="container">

                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="#">Geolog&iacute;a y Telecomunicaciones, C.A.</a>
                        <span class="company-id"><strong>RIF: J-30704051-3<strong></span>
                        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-right">
                                <li class="active"><a href="#">Inicio</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="#about">Acerca de</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="#contact">Contacto</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- /.navbar-inner -->
                </div><!-- /.navbar -->

            </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->

        <div class="container">
        
            <div class="row">
            
                <div class="hero-unit">
                    <h1>&iexcl;Cont&aacute;ctenos!</h1>
                    <p class="tagline">Thank you for visiting out little slice of the internet. If you would like to get into contact with our team simply fill out the nifty form below. Cheers!</p>  
                </div><!--end hero unit -->
                
                <section class="span6">
                
                    <form>
                
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"><i class="icon-user"></i> Full Name</label>
                            <div class="controls controls-row">
                                <input type="text" class="input-xxlarge" id="inputEmail" placeholder="Cool Person">
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"><i class="icon-envelope"></i> Email</label>
                            <div class="controls">
                                <input type="text" class="input-xxlarge" id="inputEmail" placeholder="you@yourdomain.com">
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"><i class="icon-question-sign"></i> Subject</label>
                            <div class="controls">
                                <input type="text" class="input-xxlarge" id="inputSubject" placeholder="what's up?">
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <label class="control-label" for="inputEmail"><i class="icon-pencil"></i> Message</label>
                            <div class="controls">
                                <textarea rows="6" class="input-xxlarge" placeholder="What's on your mind?"></textarea>
                            </div>
                        </div>
                    
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn btn-success">Send Message</button>
                            </div>
            
                    </form>
                    <br class="clear">
                
                
                
                </section><!-- end left -->
                
                <section class="span6">
                    <div class="well">
                        <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+city&amp;aq=&amp;sll=37.6,-95.665&amp;sspn=60.867771,135.263672&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=New+York&amp;z=11&amp;iwloc=A&amp;output=embed"></iframe>
                    </div><!--end well -->
                </section><!--end right --> 
            </div><!--end row -->

        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./assets/js/jquery.js"></script>
        <script src="./assets/js/bootstrap-transition.js"></script>
        <script src="./assets/js/bootstrap-alert.js"></script>
        <script src="./assets/js/bootstrap-modal.js"></script>
        <script src="./assets/js/bootstrap-dropdown.js"></script>
        <script src="./assets/js/bootstrap-scrollspy.js"></script>
        <script src="./assets/js/bootstrap-tab.js"></script>
        <script src="./assets/js/bootstrap-tooltip.js"></script>
        <script src="./assets/js/bootstrap-popover.js"></script>
        <script src="./assets/js/bootstrap-button.js"></script>
        <script src="./assets/js/bootstrap-collapse.js"></script>
        <script src="./assets/js/bootstrap-carousel.js"></script>
        <script src="./assets/js/bootstrap-typeahead.js"></script>
        <script>

        </script>
        <script src="./assets/js/holder/holder.js"></script>
    </body>
</html>