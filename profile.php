<?php include './inc/header.php' ?>

    <header>
        <div class="container middle">
            <div class="row">
                <div class="col-lg-12">                    
                    <div class="intro-text ">                       
                        <span class="name">Profile</span>
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

 <?php include './inc/footer.php'; ?>