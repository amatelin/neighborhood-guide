<?php $page == "splash" ?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Alexis Matelin">
           
    <title>NestFinder Neigborhood Guide</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- NestFinder CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/fotorama.css">

    <!-- CSS body { overflow: hidden } hack -->
    <?php if ($page == "quartier"): ?>
        <link rel="stylesheet" href="./css/quartier.css">';
    <?php endif; ?>
    <link rel="stylesheet" href="./css/datepicker.css">
    
    
        <!-- Javascript -->  
    <script src="./js/jquery-2.1.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/neighbourhoodguide.js"></script>
    <script src="./js/bootstrap-datepicker.js"></script>

        
    <!-- Fonts -->
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav class="navbar my-navbar-default navbar-fixed-top">

        <div class="container-navbar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="logo"></span>

                <a class="navbar-brand" href="#page-top">NestFinder</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li class="hidden">
                        <a href="index.php#page-top"></a>
                    </li>

                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

        <section class="splash" id="splash">
            
            
        <div >
        <div id="header-index"></div>
        <div class="container index">
            <div class="row">
                <div class="col-lg-12">
                    <!--<img class="img-responsive" src="img/GPS.png" alt="">-->
                    
                    <div class="intro-text ">


                        <div class="splash-text">
                            <p>
                            orem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque volutpat massa, id lacinia elit 
                            convallis vitae. Fusce semper mauris sed risus ornare tincidunt. Phasellus dictum libero ac aliquam consequat. 
                            Cras quis egestas nibh, et facilisis justo. Sed venenatis auctor lorem, in placerat lorem sollicitudin vel. 
                            Nam convallis a neque at dapibus.
                            </p>
                            
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pellentesque volutpat massa, id lacinia elit 
                            convallis vitae. Fusce semper mauris sed risus ornare tincidunt. Phasellus dictum libero ac aliquam consequat. 
                            Cras quis egestas nibh, et facilisis justo. Sed venenatis auctor lorem, in placerat lorem sollicitudin vel. 
                            Nam convallis a neque at dapibus.
                            </p>
                            
                        </div>

                        <img src="img/white-star.png">
                        <div class="row">
                        <div class="span12">
                            <h1>Subscribe to our Newsletter</h1>
                                <div class="thumbnail well well-small text-center">

                                    <form action="" method="post">
                                        <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                                            <input class="input-xlarge email-length" type="text" id="" name="" placeholder="your@email.com">
                                        </div>
                                        <br />
                                        <input id="subscribe" type="submit" value="Subscribe Now!" class="btn btn-large" />
                                  </form>
                                </div>    
                            </div>
                        </div>
                      
                        <div class="page-scroll downarrow">
                            <a href="#about" title="Discover the guide!" class="fa fa-arrow-down"></a>

                </div>
<div id="photocredit">
        Photo Credit: <a href="https://www.flickr.com/photos/mricon/193910918/">Konstantin Ryabitsev</a>
    </div>
            </div>

        </div>
    </div> 

</section>
                                        
    <section class="success about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Us</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>
                        The Neighbourhood Guide from Nestfinder is a project which aims to offer a pertinent and comprehensive information source
                        to both those who are new to Montreal and its existing residents.
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>
                        At Nestfinder, we recognize that a city's inhabitants are those best placed to help others discover their city.
                        This is why we wish to work in tandem to make this guide, your guide, written by Montrealers for Montrealers.
                        
                    </p>
                </div>
            </div>
        </div>
        
    </section>

   <?php if ($page != "quartier"): ?>
    <footer class="text-center">
        <div class="footer-above footer-spacer">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Address</h3>
                        <p>1009 rue de Bleury
                            <br>Monteal, QC H1L1L1</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Social Networks</h3>
                        <ul class="list-inline">
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About NestFinder</h3>
                        <p>
                            Nestfinder is a startup created by young Montreal entrepreneurs.
                            Visit the <a href="team.php">team</a> page to learn more about us!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - NestFinder
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <?php endif; ?>

    <!-- Javascript -->  
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="./js/handlebars-v1.3.0.js"></script>
    <script src="./js/fotorama.js"></script>
     

    <?php if ($page == "quartier"): ?>
        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsp30dcLedKh-rLy6H_QNGvs1RYPiLb4s&sensor=TRUE">
        </script>
        <script src="./js/quartier.js"></script>
        <script src="./js/map.js"></script>  
    <?php endif; ?>
        
    </body>
</html>
