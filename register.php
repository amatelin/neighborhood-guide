<?php include './inc/header.php' ?>

    <header>
        <div class="container middle">
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
                                      <input id="email" name="email" placeholder="Type your adress mail" class="form-control input-md" type="text">
                                        
                                      </div>
                                    </div>

                                    <!-- Password input-->

                                    <div class="form-group">
                                      <label for="inputPassword" class="control-label col-md-4">Password</label>
                                      <div class="col-md-6">
                                        <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                        <span class="help-block white">Minimum of 6 characters</span>
                                      </div>
                                      
                                      <label for="inputPassword" class="control-label col-md-4">Confirm Password</label>
                                      <div class="col-md-6">
                                        <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                    </div>                            
                                    
                                    <!-- Multiple Checkboxes (inline) -->
                                    <div class="form-group">
                                      <label class="col-md-2 control-label" for="checkboxes"></label>
                                      <div class="col-md-8">
                                        <label class="checkbox-inline" for="checkboxes-0">
                                          <input name="checkboxes" id="checkboxes-0" value="" type="checkbox">
                                          I've read and i agree with NestFinder's terms of service.
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
 <?php include './inc/footer.php' ?>
