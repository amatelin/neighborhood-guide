 <?php include './inc/header.php' ?>

 <header>
  <div class="container middle">
    <div class="row">
      <div class="col-lg-12">                    
        <div class="intro-text ">                       
          <span class="name">Control panel</span>
          <img src="img/white-star.png">
          <?php include './inc/breadcrumb.php' ?>
        </div>
        <div class="intro-text-form" id="intro-text-form"> 
          <div class="log-form">
            <h4>
                <a href="controlpanel.php">Notifications</a>
                <a href="editprofile.php">Edit Profile</a>
                <a href="settings.php">Settings</a>
              </h4>
            <form class="form-horizontal">
              <!-- Text input-->

                    <fieldset class="legends edit">
                    <legend><h4>Email</h4></legend>
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="email">Email</label>  
                      <div class="col-md-8">
                        <input id="email" name="email" placeholder="Typer your adress mail" class="form-control input-md" type="text">
                      </div>
                    </div>
                    <!-- Password input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="password">Password</label>
                      <div class="col-md-8">
                        <input id="password" name="password" placeholder="Typer your password" class="form-control input-md" type="password">
                      </div>
                    </div>
                    </fieldset>

                     <fieldset class="legends">
                    <legend><h4>Picture</h4></legend>
                    <div class="form-group">
                      <div class="col-md-7">
                        <div class="pic-panel" >
                          <img src="img/neighborhoods/neighborhoods/joscar.jpg" class="img-responsive">
                          <!-- File Button --> 
                          <div class="form-group">
                            <span><input type="file" id="exampleInputFile"></span>
                           </div>
                        </div>
                      </div>
                    </div>
                    
                  </fieldset>

                    <!-- Text input-->
                    <fieldset class="legends edit">
                    <legend><h4>Personnel info</h4></legend>
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="name">Name</label>  
                      <div class="col-md-8">
                        <input id="name" name="name" placeholder="Type your name" class="form-control input-md" type="text">
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="nickname">Nickname</label>  
                      <div class="col-md-8">
                        <input id="nickname" name="nickname" placeholder="Type your nickname" class="form-control input-md" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label" for="gender">Gender</label>  
                      <div class="col-md-3">
                         <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Male
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Female
                      </label>
                    </div>
                      </div>
                    </div>

                    <!-- Datebirth input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="datebirth">Birthday</label>
                      <div class="col-md-8">
                        <input id="datebirth" name="datebirth" placeholder="DD-MM-YYYY" class="datepicker form-control input-md">
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="homeTown">Home Town</label>  
                      <div class="col-md-8">
                        <input id="homeTown" name="homeTown" placeholder="Typer your home town" class="form-control input-md" type="text">
                      </div>
                    </div>
                  </fieldset>

                 

                  <!-- Text input-->
                    <fieldset class="legends">
                    <legend><h4>Contact</h4></legend>
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="location">About me</label>  
                      <div class="col-md-8">
                        <textarea id="aboutme" name="aboutme" placeholder="Type about yourself" class="form-control" type="text"></textarea>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="nickname">Location</label>  
                      <div class="col-md-8">
                        <input id="location" name="location" placeholder="Type your location" class="form-control input-md" type="text">
                      </div>
                    </div>
                    <!-- Datebirth input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="datebirth">Interests</label>
                      <div class="col-md-8">
                        <input id="interests" name="interests" placeholder="Type your interests" class="form-control input-md" type="text">
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="homeTown">Occupations</label>  
                      <div class="col-md-8">
                        <input id="occupations" name="occupations" placeholder="Typer your occupations" class="form-control input-md" type="text">
                      </div>
                    </div>
                  </fieldset>
                    
                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="submit"></label>
                      <div class="col-md-3">
                        <button id="submit" name="submit" class="btn btn-inverse">Save</button>
                      </div>
                    </div>
                  
                </form>

          </div>
        </div>                    
      </div>
    </div>            
  </div>
  </header>
  <?php include './inc/footer.php' ?>
