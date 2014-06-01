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
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--<img class="img-responsive" src="img/GPS.png" alt="">-->
                    
                    <div class="intro-text ">
                        <div class="center">
                        <span class="logo"></span>
                        <a class="navbar-brand" href="#page-top">NestFinder</a>
                        </div>
                        <img class="gps-image img-responsive" width="600px" src="img/map-welcome.png" alt="">
                        <span class="name">Neighbourhood Guide</span>
                        <img src="img/white-star.png">
                        <span class="skills">The open source neighbourhood guide created by the community for the community. Click on the arrow to the right and discover the guide!</span>
                        <br>
                        <a href="#neighborhoods-list" title="Discover the guide!" class="fa fa-chevron-down"></i></a>
                        <br/>
                        <br/>
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
                <a class="navbar-brand" href="index.php">NestFinder</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.php#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#neighborhoods-list">Visit the Neighbourhoods</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contribute">Contribute</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
        