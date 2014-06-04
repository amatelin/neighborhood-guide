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
                        <div class="row">
                        <div class="span12">
                                <div class="thumbnail well well-small text-center">

                                    <p>Subscribe to our Newsletter and stay tuned.</p>

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
                            <a href="#contribute" title="Discover the guide!" class="fa fa-arrow-down"></a>

                </div>
            </div>
            
        </div>
    </header>   

    <!-- Navigation -->
    <nav class="navbar my-navbar-default navbar-fixed-top not-displayed">
 
        
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
                        <a href="#page-top"></a>
                    <li class="page-scroll">
                        <a href="#contribute">Contribute</a>
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
 
    <section id="contribute">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contribute to the guide!</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p class="white description">Looking for a way to improve the guide and help it grow? You can contribute your own knowledge to this open source repository of information strengthening your community
                    by submitting information about your favorite places.</p>
                    <p class="white description">If you have any questions, please contact us, we'd love to hear from you!</p>
                    
                <div class="col-lg-12 text-center">
                    <h2>Conact Us!</h2>
                    <hr class="star-light">
                </div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" type="email" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <label for="message">Message</label>
                                <textarea placeholder="Message" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-lg btn-success">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="success" id="about">
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
                        Check out the contribute section for more information on you can make your experience part of this open source project.
                    </p>
                </div>
            </div>
        </div>
        
    </section>

 <?php include 'inc/footer.php' ?>