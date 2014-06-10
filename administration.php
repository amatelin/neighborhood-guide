
<?php
$page = "team";
include './inc/header.php'
?>
    <div id="admin-wrapper">
        <div class="section-title">
            <h1 class="name">Administration</h1>
            <img src="img/white-star.png">
            <?php include './inc/breadcrumb.php' ?>
        </div>
        <div class="content">
            <?php
                include './inc/menu.php';
            ?>
        </div>
    </div>
    <section class="adjustement">
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
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
                                            <option value="3">Theatre</option>
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
        <!--    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>-->
            </div>
        </div>
    </div>
</section>
 <?php include './inc/footer.php' ?>
