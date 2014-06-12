<?php include './inc/header.php' ?>

    <header>
        <div class="container middle">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text ">
                        <span class="name">Add Category</span>
                        <img src="img/white-star.png">
                        <?php include './inc/breadcrumb.php' ?>
                    </div>
                    <div class="intro-text-form">
                        <div class="log-form">
                            <form class="form-horizontal">
                                <fieldset>

                                    <!-- Script and styles -->
                                    <script src="js/jstree.min.js"></script>
                                    <script>
                                        $(function() {
                                            $('#jstree').jstree({
                                                core: {
                                                    themes: { icons: false },
                                                    multiple: false,
                                                }
                                            })
                                        })
                                    </script>
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
                                            transform: none;
                                        }
                                    </style>

                                    <!-- Choice Categories -->
                                    <!-- <label class="col-md-4 control-label" for="name">Select the parent category</label> -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Select the parent category</label>
                                        <div class="col-md-12">
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
                                        </div>
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
                                        <div class="form-group">
                                          <label class="col-md-2 control-label" for="name">Name</label>
                                          <div class="col-md-10">
                                              <input id="name" name="name" placeholder="Category Name" class="form-control input-md" type="text">
                                          </div>
                                        </div>
                                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Send</button>
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
