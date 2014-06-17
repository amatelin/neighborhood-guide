 <?php include './inc/header.php' ?>

 <header>
  <div class="container middle">
    <div class="row">
      <div class="col-lg-12">
          <div class="intro-text">
            <span class="name">Control Panel</span>
            <img src="img/white-star.png">
            <?php include './inc/breadcrumb.php' ?>
          </div>
        <div class="intro-text-form">
          <div class="log-form">
                          <h4>
                <a href="controlpanel.php">Notifications</a>
                <a href="editprofile.php">Edit Profile</a>
                <a href="settings.php">Settings</a>
              </h4>
            <form class="form-horizontal">
                
              <fieldset class="legends choices">
                <legend><h4>Notifications</h4></legend>
                <!-- Text input-->
                <div class="form-group" id="radio-legends"> 
                  <div class="col-md-9">
                    <!-- <input class="" type="checkbox"><span>Public (allow anyone to see your profile)</span>
                    <input class="" type="checkbox"> Private (only users can to see your profile) -->
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Receive all notifications
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Only receive notifications from my neighborhood
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Receive no notifications
                      </label>
                    </div>

                  </div>
                </div>
              </fieldset>

                <!-- Text input-->
                <fieldset class="legends choices" id="radio-legends">
                <legend><h4>Privacy</h4></legend>
                <div class="form-group">
                  <div class="col-md-9">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                        Share
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Don't share
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Receive no notifications
                      </label>
                    </div>

                  </div>
                </div>
                </fieldset>

                <!-- Text input-->
                <fieldset class="legends choices">
                <legend><h4>Privacy</h4></legend>
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
                </fieldset>

                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="submit"></label>
                  <div class="col-md-3">
                    <button id="submit" name="submit" class="btn btn-inverse save">Save</button>
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
