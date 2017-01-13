<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>H & R JOHNSON INDIA - eLearning</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  

    <!-- Custom Fonts -->
     <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
   
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="/css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .navbar-default .navbar-header .navbar-brand{min-height: 58px;}
        header .header-content .header-content-inner{ padding-top: 40px; }
        .m-t-20{ margin-top: 20px; }
        video::-internal-media-controls-download-button {
    display:none;
}

video::-webkit-media-controls-enclosure {
    overflow:hidden;
}

video::-webkit-media-controls-panel {
    width: calc(100% + 30px); /* Adjust as needed */
}

.navbar-right {
    float: right !important;
    margin-right: -15px;
}
.navbar-header{ width: 100%; }
a.dropdown-toggle{ padding-top: 10px; display: block;  }
.dropdown{ padding-top: 20px; font-size: 16px; font-weight: bold; }
.btn-primary{ background-color: #e42c33 !important; color: #fff !important; }
a { color: #e42c33 !important; }
hr{ border-color:#e42c33 !important;  }
    </style>






</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img height="40" src="img/logo-johnson.png"></a>
                
                    <!-- Authentication Links -->
                   
                        <div class="dropdown" align="right">
                            
                               Welcome <?php echo Auth::user()->name ?>, <a href="<?php echo url('/logout') ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a> 
                           

                            
                        </div>
                    
               
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div> -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">H & R JOHNSON (INDIA)</h1>
                <hr>
                <p>The only entity in India to offer end-to-end lifestyle solutions covering Wall and Floor Tiles, Faucets, Sanitaryware & Wellness products, Engineered Marble and Quartz as well as Modular Kitchens.</p>
                <a href="#portfolio" class="btn btn-primary btn-xl page-scroll">Click to watch e-Learning Videos</a>
            </div>
        </div>
    </header>

    

    

    <section class="no-padding" id="portfolio" style="background-color: #e6e6e6; padding: 20px;">
        <div class="container-fluid">
            <div class="row  popup-gallery">

                <!-- <div class="col-lg-6 col-sm-12">
                    <video style="width: 100%;" src="video/1_specifier.mp4"></video>
                </div> -->

                <div class="col-lg-6 col-sm-12">
  
                    <div class="panel panel-default">
                      <div class="panel-thumbnail">
                          <video style="width: 100%;"  controls>
                              <source src="video/1_specifier.mp4" type="video/mp4">
                              
                            Your browser does not support the video tag.
                            </video>
                      </div>
                      <div class="panel-body">
                        <p>1. Creation of Specifier</p>
                        <p></p>

                      </div>
                    </div><!--/panel-->
                </div>

                <div class="col-lg-6 col-sm-12">
  
                    <div class="panel panel-default">
                      <div class="panel-thumbnail">
                          <video style="width: 100%;"  controls>
                              <source src="video/2_creation.mp4" type="video/mp4">
                              
                            Your browser does not support the video tag.
                            </video>
                      </div>
                      <div class="panel-body">
                        <p>2. Project Creation & Entering of product details</p>
                        <p></p>

                      </div>
                    </div><!--/panel-->
                </div>


                <div class="col-lg-6 col-sm-12">
  
                    <div class="panel panel-default">
                      <div class="panel-thumbnail">
                          <video style="width: 100%;"  controls>
                              <source src="video/3_quotation.mp4" type="video/mp4">
                              
                            Your browser does not support the video tag.
                            </video>
                      </div>
                      <div class="panel-body">
                        <p>3. Quotation Creation and editing of quotation</p>
                        <p></p>

                      </div>
                    </div><!--/panel-->
                </div>


                <div class="col-lg-6 col-sm-12">
  
                    <div class="panel panel-default">
                      <div class="panel-thumbnail">
                          <video style="width: 100%;"  controls>
                              <source src="video/4_supply.mp4" type="video/mp4">
                              
                            Your browser does not support the video tag.
                            </video>
                      </div>
                      <div class="panel-body">
                        <p>4. Order Creation & Schedule Supply</p>
                        <p></p>

                      </div>
                    </div><!--/panel-->
                </div>
                
                
            </div>
        </div>
    </section>

    

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Get In Touch!</h2>
                    <hr class="primary">
                    <p></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>1800-22-7484</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:customercare@hrjohnsonindia.com">customercare@hrjohnsonindia.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="/js/creative.min.js"></script>

</body>

</html>
