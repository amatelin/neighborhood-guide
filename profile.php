<?php include './inc/header.php' ?>

<header>
  <div class="container middle">
    <div class="row">
      <div class="col-lg-12">                    
        <div class="intro-text" id="profile-intro">                       
          <span class="name">Profile</span>
          <img src="img/white-star.png">
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="intro-text-form profile-left" id="profile-wrapper">
              <div class="profile-pic" >
                <h4>Picture</h4>
                <img src="img/neighborhoods/neighborhoods/joscar.jpg" class="img-responsive">
                <!-- File Button --> 
                <div class="form-group">
                  <input type="file" id="exampleInputFile">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
             <div class="intro-text-form profile-right" id="profile-wrapper">
              <div class="log-form">
                <h4>Informations</h4>
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
                    <!-- Datebirth input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="datebirth">Date of Birth</label>
                      <div class="col-md-6">
                        <input id="datebirth" name="datebirth" placeholder="DD-MM-YYYY" class="datepicker form-control input-md">
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="homeTown">Home Town</label>  
                      <div class="col-md-6">
                        <input id="homeTown" name="homeTown" placeholder="Typer your home town" class="form-control input-md" type="text">

                      </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="submit"></label>
                      <div class="col-md-4">
                        <button id="submit" name="submit" class="btn btn-inverse">Save</button>
                      </div>
                    </div>

                  </fieldset>
                </form>
              </div> 
            </div>
          </div>  
        </div> 
      </div>                    
    </div>
  </div>            
</div>
</header>
<?php include './inc/footer.php'; ?>