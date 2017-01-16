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
    <link href="https://www.hrjohnsonindia.com/elearning/public/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="https://www.hrjohnsonindia.com/elearning/public/css/creative.min.css" rel="stylesheet">

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
a.dropdown-toggle{ padding-top: 10px;  }
.dropdown-menu{ right: 10px; left: auto !important; }
.dropdown{ padding-top: 20px; font-size: 16px; font-weight: bold; }
.btn-primary{ background-color: #e42c33 !important; color: #fff !important; }
a { color: #e42c33 !important; }
hr{ border-color:#e42c33 !important;  }
.dropdown-btn{ font-size: 20px; margin-left: 10px; margin-right: 10px; }

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
                            
                               Welcome <?php echo Auth::user()->name."  "; ?>
                               <?php if(Auth::user()->id==1){ ?>
                                <a href="javascript:void(0)" class="dropdown-toggle dropdown-btn" data-toggle="dropdown"><span class="fa fa-bars"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Create Users</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)">User Log</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript:void(0)">Video Log</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo url('/logout') ?>">Logout</a></li>
                                  </ul>
                               <?php }else{ ?>
                               , <a href="<?php echo url('/logout') ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a> 
                               <?php } ?>  

                            
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

    
    <!-- Register Form  -->
    
    <form class="form-horizontal" style="margin-top: 120px;" role="form" method="POST" action="<?php echo url('/userregister') ?>">
                        <?php echo csrf_field() ?>
                        <h2 align="center" style="margin-bottom: 15px;">User Registeration</h2>
                        <div class="form-group<?php echo  $errors->has('name') ? ' has-error' : ''  ?> ">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo  old('name') ?>">

                              <?php if ($errors->has('name')){ ?>
                                    <span class="help-block">
                                        <strong><?php echo  $errors->first('name')  ?> </strong>
                                    </span>
                              <?php   } ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo  $errors->has('email') ? ' has-error' : ''  ?> ">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo  old('email')  ?> ">

                               <?php if ($errors->has('email')){ ?>
                                    <span class="help-block">
                                        <strong><?php echo  $errors->first('email')  ?> </strong>
                                    </span>
                                
                                <?php }  ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo  $errors->has('email') ? ' has-error' : ''  ?> ">
                            <label for="email" class="col-md-4 control-label">Employee Id</label>

                            <div class="col-md-6">
                                <input id="empid" type="text" class="form-control" name="empid" value="<?php echo  old('empid')  ?> ">

                                <?php if ($errors->has('empid')) { ?>
                                    <span class="help-block">
                                        <strong><?php echo  $errors->first('empid')  ?> </strong>
                                    </span>
                                 <?php }  ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo  $errors->has('password') ? ' has-error' : ''  ?> ">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if ($errors->has('password')) { ?>
                                    <span class="help-block">
                                        <strong><?php echo  $errors->first('password')  ?> </strong>
                                    </span>
                                 <?php }  ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo  $errors->has('password_confirmation') ? ' has-error' : ''  ?> ">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                <?php if ($errors->has('password_confirmation')){ ?>
                                    <span class="help-block">
                                        <strong><?php echo  $errors->first('password_confirmation')  ?> </strong>
                                    </span>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
    

    <!-- Register Form  -->

    <!-- jQuery -->
    <script src="https://www.hrjohnsonindia.com/elearning/public/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://www.hrjohnsonindia.com/elearning/public/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://www.hrjohnsonindia.com/elearning/public/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="https://www.hrjohnsonindia.com/elearning/public/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="https://www.hrjohnsonindia.com/elearning/public/js/creative.min.js"></script>

    

</body>

</html>
