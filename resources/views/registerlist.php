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

    <link href="https://www.hrjohnsonindia.com/elearning/public/assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link href="https://www.hrjohnsonindia.com/elearning/public/assets/advanced-datatable/extras/TableTools/media/css/TableTools.css" rel="stylesheet" />

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
.site-min-height{ margin-top: 70px; padding: 30px; }
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
                                    <li><a href="<?php echo url('/userregister') ?>">Create Users</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo url('/userlog') ?>">User Log</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo url('/videolog') ?>">Video Log</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo url('/logout') ?>">Logout</a></li>
                                  </ul>
                               <?php }else{ ?>
                               , <a href="javascript:void(0)" class="dropdown-toggle dropdown-btn" data-toggle="dropdown"><span class="fa fa-bars"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Change Password</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo url('/logout') ?>">Logout</a></li>
                                  </ul>  
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
    <div class="site-min-height">
      <h2>Registered Users List</h2>
    <a class="btn btn-primary" href="<?php echo url('/userregistercreate') ?>">Add User</a>
   <table   class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Employee Id</th>
                                          
                                           
                                            <th>Delete</th>
                                           
                                          
                                      </tr>
                                      </thead>
                                      <tbody>
                             <?php $i=1; if(isset($user)){
                             foreach($user as $usr){ ?>      
                                      <tr >
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $usr->name ?></td>
                                        <td><?php echo $usr->email ?></td>
                                        <td><?php echo $usr->empid ?></td>
                                        
                                        <td><a href="javascript:void(0)" rel="<?php echo $usr->id ?>" class="btn delete_user btn-primary">Delete</a></td>
                                      </tr>
                               <?php $i++; } } ?>       
                                      </tbody>
                                     
                          </table>
</div>

    <!-- Register Form  -->

    <!-- jQuery -->
    <script src="https://www.hrjohnsonindia.com/elearning/public/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://www.hrjohnsonindia.com/elearning/public/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://www.hrjohnsonindia.com/elearning/public/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="https://www.hrjohnsonindia.com/elearning/public/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://www.hrjohnsonindia.com/elearning/public/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="https://www.hrjohnsonindia.com/elearning/public/assets/advanced-datatable/extras/TableTools/media/js/TableTools.min.js"></script>
     
     
    <!-- Theme JavaScript -->
    <script src="https://www.hrjohnsonindia.com/elearning/public/js/creative.min.js"></script>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#example').dataTable({
                  "sDom": 'T<"clear">lfrtip',
                  
        "oTableTools": {
            "sSwfPath": "assets/advanced-datatable/extras/TableTools/media/swf/copy_csv_xls_pdf.swf",
            "aButtons": [
               
                {
                    "sExtends": "xls",
                    "sTitle": "category"
                },
                {
                    "sExtends": "pdf",
                    "sTitle": "category"
                }
                
            ]
        }
                  
                  });

            $('.delete_user').click(function(){
                var ids=$(this).attr('rel')
                $.ajax({
                url: '<?php echo url('/userdestroy'); ?>',
                type: 'GET',
                data: 'id='+ids,
            })
            .done(function(data) {
                console.log(ids);
                console.log(data);
                $('delete_user[rel="'+ids+'"]').parent().parent().remove();
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });

            })

            
            


        });
    </script>

</body>

</html>
