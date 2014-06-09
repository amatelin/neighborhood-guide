<!DOCTYPE html>
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

<body id="page-top" class="index">
    

    <?php if ($page == "index"): ?>    
    <header class="index">
        <div id="header-index"></div>
        <div class="container index">
            <div class="row">
                <div class="col-lg-12">
                    <!--<img class="img-responsive" src="img/GPS.png" alt="">-->
                    
                    <div class="intro-text ">
                        <div class="center">
                        <span class="logo"></span>
                        <a class="navbar-brand" href="#page-top">NestFinder</a>
                        </div>
                        </br>
                        <img class="gps-image img-responsive" width="600px" src="img/map-welcome.png" alt="">
                        <span class="name">Neighbourhood Guide</span>
                        <img src="img/white-star.png">
                        <span class="skills">
                            The open source neighbourhood guide created by the community for the community.                           
                        </span>
                        <br/>
                        <br/>
                        <div class="page-scroll">
                            <a href="#neighborhoods-list" title="Discover the guide!" class="fa fa-arrow-down"></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </header>   

    <!-- Navigation -->
    <nav class="navbar my-navbar-default navbar-fixed-top not-displayed">
    <?php else: ?>
    <nav class="navbar my-navbar-default navbar-fixed-top">
    <?php endif; ?>    
        
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
                <?php if ($page == "index"): ?>
                <a class="navbar-brand" href="#page-top">NestFinder</a>
                <?php else: ?>
                <a class="navbar-brand" href="index.php">NestFinder</a>
                <?php endif; ?>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <?php if ($page == "index"): ?>
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#neighborhoods-list">Visit the Neighbourhoods</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contribute">Contribute</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>

                    <li class="page-scroll">
                        <div class="btn-group btn-group-nav">
                          <div class="btn xbtn-default xdropdown-toggle" data-toggle="dropdown">
                                <a href="profile.php"><i class="fa fa-gear"></i></a>
                                <span class="caret"></span>
                          </div>
                          <ul class="dropdown-menu white">
                                <li><a href="addThing.php">Add Place</li>
                                <li><a href="register.php">Register</a></li>
                                <li><a href="login.php">Login</a></li>    
                          </ul>
                        </div>
                    </li>
                    <li class="page-scroll">
                        <div class="btn-group btn-group-nav">
                          <div class="btn xbtn-default xdropdown-toggle" data-toggle="dropdown">
                             <a href="profile.php">
                             <a href="profile.php"><img src="img/neighborhoods/neighborhoods/joscar.jpg" class="nav-profile-picture"></a>
                             <span id="username">Scar-Jo</span>
                          </div>
                          <ul class="dropdown-menu white">
                                <li><a href="profile.php">Profile</a></li>
                                <li><a href="settings.php">Settings</a></li>
                                <li><a href="administration.php">Administration</a></li>
                                <li><a href="index.php">Log out</a></li>
                          </ul>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="hidden">
                        <a href="index.php#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#neighborhoods-list">Visit Neighbourhoods</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#contribute">Contribute</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.php#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <div class="btn-group btn-group-nav">
                          <div class="btn xbtn-default xdropdown-toggle" data-toggle="dropdown">
                                <a href="profile.php"><i class="fa fa-gear"></i></a>
                                <span class="caret"></span>
                          </div>
                          <ul class="dropdown-menu">
                            <li><a href="addThing.php">Add Place</a></li>
                            <li><a href="register.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                          </ul>
                        </div>
                    </li>
                    <li class="page-scroll">
                        <div class="btn-group btn-group-nav">
                          <div class="btn xbtn-default xdropdown-toggle" data-toggle="dropdown">
                              <a href="profile.php"><img src="img/neighborhoods/neighborhoods/joscar.jpg" class="nav-profile-picture"></a>
                              <span id="username">Scar-Jo</span>
                          </div>
                          <ul class="dropdown-menu">
                            <li><a href="profile.php">Profile</a></li>
                                <li><a href="settings.php">Settings</a></li>                                
                                <li><a href="administration.php">Administration</a></li>
                                <li><a href="index.php">Log out</a></li>
                          </ul>
                        </div>
                    </li>
                <?php endif; ?>
               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        