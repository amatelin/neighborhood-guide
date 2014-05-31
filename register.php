<?php include './inc/header-small.php' ?>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">                    
                    <div class="intro-text ">                       
                        <span class="name">Register</span>
                        <img src="img/white-star.png">
                    </div>
                    <div class="intro-text-form"> 
                        <div class="log-form">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="name">Name</label>  
                                      <div class="col-md-6">
                                      <input id="name" name="name" placeholder="Type your name" class="form-control input-md" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="nickname">Nickname</label>  
                                      <div class="col-md-6">
                                      <input id="nickname" name="nickname" placeholder="Type your nickname" class="form-control input-md" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="email">Email</label>  
                                      <div class="col-md-6">
                                      <input id="email" name="email" placeholder="Typer your adress mail" class="form-control input-md" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Password input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="password">Password</label>
                                      <div class="col-md-6">
                                        <input id="password" name="password" placeholder="Typer your password" class="form-control input-md" type="password">
                                        
                                      </div>
                                    </div>

                                    <!-- Multiple Checkboxes (inline) -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="checkboxes"></label>
                                      <div class="col-md-4">
                                        <label class="checkbox-inline" for="checkboxes-0">
                                          <input name="checkboxes" id="checkboxes-0" value="" type="checkbox">
                                          I've read and i agree with NestFinder's rules.
                                        </label>
                                      </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="submit"></label>
                                      <div class="col-md-4">
                                        <button id="submit" name="submit" class="btn btn-inverse">Register</button>
                                      </div>
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                    </div>                    
                </div>
            </div>            
        </div>
    </header>
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Adresse</h3>
                        <p>1009 rue de Bleury
                            <br>Monteal, QC H1L1L1</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Reseaux Sociaux</h3>
                        <ul class="list-inline">
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>A propos de NestFinder</h3>
                        <p>NestFinder est une startup cree par de jeunes entrepreuneurs Montrealais. Voir le <a href="#">blog</a> pour suivre les avancees du projet.</p>
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

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!--<script src="js/freelancer.js"></script>-->

</body>

</html>
