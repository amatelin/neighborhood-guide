<?php include './inc/header.php' ?>

    <header>
        <div class="container middle">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Add Place</span>
                        <img src="img/white-star.png">
                        <?php include './inc/breadcrumb.php' ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text-form">
                        <div class="log-form">
                            <form class="form-horizontal">
                                <fieldset>

                                    <!-- Script and styles -->
                                    <script src="js/form.js"></script>
                                    <script src="js/jstree.min.js"></script>
                                    <link rel="stylesheet" href="./themes/default/style.min.css">
                                    <style>
                                    </style>

                                    <!-- Choice Categories -->
                                    <div id="jstree">
                                        <ul>
                                            <li class="jstree-open"><a href="#entertainement">Entertainement</a>
                                                <ul>
                                                    <li><a href="#cinema">Cinema</a></li>
                                                    <li><a href="#theatre">Theatre</a></li>
                                                </ul>
                                            </li>
                                            <li class="jstree-open"><a href="#restaurant">Restaurants</a>
                                                <ul>
                                                    <li><a href="#cafe">Cafe</a></li>
                                                    <li><a href="#resto">Resto</a></li>
                                                </ul>
                                            </li>
                                          </ul>
                                    </div>
                                    <!--
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Select Categorie</label>
                                        <div class="col-md-4">
                                            <select id="selectbasic" name="selectbasic" class="form-control">
                                                <option value="none" disabled selected>Label</option>
                                                <optgroup label="Entertainement">
                                                    <option value="cinema">Cinema</option>
                                                    <option value="theatre">  Theatre</option>
                                                </optgrounp>
                                                <optgroup label="Restaurants">
                                                    <option value="cafe">Cafe</option>
                                                    <option value="resto">Resto</option>
                                                </optgrounp>
                                            </select>
                                        </div>
                                    </div>-->
                                    <div id="box">
                                    </div>

                                    <!-- Default form before -->
                                    <script type="text/template" id="input-before">
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="name">Name</label>
                                          <div class="col-md-8">
                                              <input id="name" name="name" placeholder="Enter the name" class="form-control input-md" type="text">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="desc">Description</label>
                                            <div class="col-md-8">
                                                <textarea class="form-control" id="desc" name="desc" placeholder="Enter the description"></textarea>
                                            </div>
                                        </div>
                                    </script>

                                    <!-- Default form after -->
                                    <script type="text/template" id="input-after">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Send</button>
                                    </script>

                                    <!-- Text input-->
                                    <script type="text/template" id="input-text">
                                        <div class="form-group">
                                          <label class="col-md-4 control-label" for="{{name}}">{{name}}</label>
                                          <div class="col-md-8">
                                              <input id="{{name}}" name="{{name}}" placeholder="{{placeholder}}" class="form-control input-md" type="text">
                                          </div>
                                        </div>
                                    </script>

                                    <!-- Textarea -->
                                    <script type="text/template" id="input-textarea">
                                        <div class="form-group">
                                            <label class="col-md-4 control-label" for="{{name}}">{{name}}</label>
                                            <div class="col-md-8">
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

                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


<?php include './inc/footer.php' ?>
