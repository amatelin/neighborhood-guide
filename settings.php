 <?php include './inc/header.php' ?>

 <header>
  <div class="container middle">
    <div class="row">
      <div class="col-lg-12">                    
        <div class="intro-text ">                       
          <span class="name">Settings</span>
          <img class="intro-star" src="img/white-star.png">
          <?php include './inc/breadcrumb.php' ?>
        </div>
        <div class="intro-text-form"> 
          <div class="log-form">
            <form class="form-horizontal">
              <fieldset class="choices">
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="name">Profile</label>  
                  <div class="col-md-7">
                    <!-- <input class="" type="checkbox"><span>Public (allow anyone to see your profile)</span>
                    <input class="" type="checkbox"> Private (only users can to see your profile) -->
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Public (allow anyone to see your profile)
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Private (only users can see your profile)
                      </label>
                    </div>

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nickname">Hide my</label>  
                  <div class="col-md-7">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Name
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Email
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Date of birth
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Home Town
                      </label>
                    </div>

                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="email">Other search engines can link to my profile</label>  
                  <div class="col-md-7">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Yes
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        No
                      </label>
                    </div>

                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-4 control-label" for="nickname">Account</label>  
                  <div class="col-md-7">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" value="">Delete my account
                      </label>
                    </div>
                  </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-3">
                    <button id="submit" name="submit" class="btn btn-inverse save">Save</button>
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
