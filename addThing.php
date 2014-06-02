<?php include './inc/header.php' ?>

    <header>
        <div class="container middle">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text ">
                        <span class="name">Add Place</span>
                        <img src="img/white-star.png">
                    </div>
                    <div class="intro-text-form">
                        <div class="log-form">
                            <form class="form-horizontal">
                                <fieldset>

                                    <script src="js/form.js"></script>
                                    <!-- Choice Categories -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Select Categorie</label>
                                        <div class="col-md-4">
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                                <option value="1" disabled selected>Label</option>
                                                <optgroup label="Entertainement">
                                                    <option value="2">Cinema</option>
                                                    <!--<option value="3">Theatre</option>-->
                                                </optgrounp>
                                                <optgroup label="Restaurants">
                                                    <option value="4">Cafe</option>
                                                    <!--<option value="5">Resto</option>-->
                                                </optgrounp>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="box">
                                    </div>

                                    <!-- Text input-->
                                    <script type="text/template" id="input-text">
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="{{name}}">{{name}}</label>
                                          <div class="col-md-6">
                                              <input id="{{name}}" name="{{name}}" placeholder="{{placeholder}}" class="form-control input-md" type="text">
                                          </div>
                                        </div>
                                    </script>

                                    <!-- Textarea -->
                                    <script type="text/template" id="input-textarea">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="{{name}}">{{name}}</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" id="{{name}}" name="{{name}}" placeholder="{{placeholder}}"></textarea>
                                            </div>
                                        </div>
                                    </script>

                                    <!-- Select -->
                                    <script type="text/template" id="input-select">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="{{name}}">{{name}}</label>
                                            <div class="col-md-4">
                                                <select id="{{name}}" name="{{name}}" class="form-control">
                                                    {{#each options}}
                                                        <option value="{{this}}">{{this}}</option>
                                                    {{/each}}
                                                </select>
                                            </div>
                                        </div>
                                    </script>



                                    <script type="text/template">
                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="name">Name</label>
                                      <div class="col-md-6">
                                      <input id="name" name="name" placeholder="Type the name" class="form-control input-md" type="text">

                                      </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="cat">Parent-catégorie</label>
                                      <div class="col-md-6">
                                      <input id="cat" name="cat" placeholder="Select the Parent Category" class="form-control input-md" type="text">

                                      </div>
                                    </div>

                                    <!-- Password input-->
                                    <div class="form-group">
                                      <label class="col-md-4 control-label" for="address">Address</label>
                                      <div class="col-md-6">
                                        <input id="address" name="address" placeholder="Type the address" class="form-control input-md" type="text">

                                      </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="textarea">Description</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" id="textarea" name="textarea" placeholder="Description"></textarea>
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
                                  </script>

                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php include './inc/footer.php' ?>
