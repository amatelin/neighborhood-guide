<?php include './inc/header.php' ?>

    <header>
        <div class="container middle">
            <div class="row">
                <div class="col-lg-12">                    
                    <div class="intro-text">                       
                        <span class="name">Login</span>
                        <img src="img/white-star.png">                    
                        <div class="log-form">
                            <form class="form-horizontal">
                                <fieldset>

                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="id">Username</label>  
                                  <div class="col-md-6">
                                  <input id="id" name="id" placeholder="Type your username" class="form-control input-md" type="text">
                                    
                                  </div>
                                </div>

                                <!-- Password input-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="password">Password</label>
                                  <div class="col-md-6">
                                    <input id="password" name="password" placeholder="Typer your password" class="form-control input-md" type="password">
                                    
                                  </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                  <label class="col-md-6 control-label" for="submit"></label>
                                  <div class="col-md-4">
                                    <button id="submit" name="submit" class="btn btn-inverse">Login</button>
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