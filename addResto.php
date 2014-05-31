<?php include './inc/header-small.php' ?>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text ">
                        <span class="name">Add Restaurant</span>
                        <img src="img/white-star.png">
                    </div>
                    <div class="intro-text-form">
                        <div class="log-form">
                            <form class="form-horizontal">
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="name">Nom</label>
                                      <div class="col-md-6">
                                      <input id="name" name="name" placeholder="Type its name" class="form-control input-md" type="text">

                                      </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="textarea">Description</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" id="textarea" name="textarea" placeholder="Description"></textarea>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="cat">Sous-catégorie</label>
                                      <div class="col-md-6">
                                      <input id="cat" name="cat" placeholder="Type the sous-cat" class="form-control input-md" type="text">

                                      </div>
                                    </div>

                                    <!-- Password input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="address">Adresse</label>
                                      <div class="col-md-6">
                                        <input id="address" name="address" placeholder="Type the address" class="form-control input-md" type="text">

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

<?php include './inc/footer.php' ?>