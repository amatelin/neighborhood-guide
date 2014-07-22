<?php include './inc/header.php' ?>

    <header>
        <div class="container middle">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Add Place</span>
                        <hr class="star-white" />
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
                                        #jstree {
                                            background: white;
                                            border-radius: 3px;
                                            margin-bottom: 32px;
                                            padding: 8px;
                                            text-align: left;
                                        }
                                        #jstree a {
                                            padding-left: 4px;
                                        }
                                        .container.middle {
                                            top: 10%;
                                        }
                                        .control-label {
                                            text-align: center!important;
                                        }
                                    </style>

                                    <!-- Choice Categories -->
                                    <span class="white">Choose a Category</span>
                                    <div id="jstree">
                                        <ul>
                                            <li class="jstree-open"><a href="#entertainement">Entertainement</a>
                                                <ul>
                                                    <li><a href="#cinema">Cinema</a></li>
                                                    <li><a href="#Bons Plans">Bons Plans</a></li>
                                                </ul>
                                            </li>
                                            <li class="jstree-open"><a href="#restaurant">Restaurants</a>
                                                <ul>
                                                    <li><a href="#Café">Cafe</a></li>
                                                    <li><a href="#Restaurant">Resto</a></li>
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
                                          <label class="col-md-12 control-label" for="name">Name</label>
                                          <div class="col-md-12">
                                              <input id="name" name="name" placeholder="Enter the name" class="form-control input-md" type="text">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="desc">Description</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="desc" name="desc" placeholder="Enter the description"></textarea>
                                            </div>
                                        </div>
                                    </script>

                                    <!-- Default form after -->
                                    <script type="text/template" id="input-after">
                                    <button type="submit" id="submit" name="submit" class="btn btn-inverse">Send</button>
                                    </script>

                                    <!-- Text input-->
                                    <script type="text/template" id="input-text">
                                        <div class="form-group">
                                          <label class="col-md-12 control-label" for="{{name}}">{{name}}</label>
                                          <div class="col-md-12">
                                              <input id="{{name}}" name="{{name}}" placeholder="{{placeholder}}" class="form-control input-md" type="text">
                                          </div>
                                        </div>
                                    </script>

                                    <!-- Textarea -->
                                    <script type="text/template" id="input-textarea">
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="{{name}}">{{name}}</label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" id="{{name}}" name="{{name}}" placeholder="{{placeholder}}"></textarea>
                                            </div>
                                        </div>
                                    </script>

                                    <!-- Select -->
                                    <script type="text/template" id="input-select">
                                        <div class="form-group">
                                            <label class="col-md-12 control-label" for="{{name}}">{{name}}</label>
                                            <div class="col-md-12">
                                                <select id="{{name}}" name="{{name}}" class="form-control">
                                                    <option value="" disabled selected>Select an option</option>
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
