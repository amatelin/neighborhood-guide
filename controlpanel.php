<?php 
$page = "controlpanel";
include './inc/header.php' 
?>

  <header>

    <div class="container middle">
      <div class="row">
        <div class="col-lg-12 controlpanel">

          <div class="intro-text">
            <span class="name">Control Panel</span>
            <img src="img/white-star.png">
            <?php include './inc/breadcrumb.php' ?>
          </div>

          <div class="intro-text  table-responsive">
            <div class="menulist">
              <ul>
                <li><a href="">Notifications</a></li>
                <li><a href="">Edit Profile</a></li>
                <li><a href="">Settings</a></li>
              </ul>
            </div>
            <div class="log-form">
              <form class="form-horizontal">
                <fieldset class="legends choices">
                  <legend><h4>Notifications</h4></legend>
                  <div class="col-lg-2" style="float:right; left:0;">
                    <input id="searchinput" name="searchinput" placeholder="Search" class="form-control input-md" type="search">
                  </div>              
                <table id="myTable"class="table table-hover">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The moderator granted your power as GodUser</td>
                            <td>03/06/2014 - 13:52:35</td>
                            <td>Read</td>                      
                        </tr>
                        <tr>
                            <td>Your post "ScarJo est pas beau" has been disaprooved</td>
                            <td>04/09/2015 - 10:58:15</td>
                            <td>Un-Read</td>
                        </tr>
                        <tr>
                            <td>2975 users reacted to your post</td>
                            <td>01/01/2004 - 13:52:35</td>
                            <td>Un-Read</td>
                        </tr>
                        <tr>
                            <td>The enterprise in which you work has been promoted as best of the year</td>
                            <td>31/12/2030 - 10:58:15</td>
                            <td>Read</td>
                        </tr>
                        <tr>
                            <td>Le sujet "Le Qébec c'est l'fun" que vous suivez a été supprimé</td>
                            <td>20/12/2014 - 13:52:35</td>
                            <td>Read</td>
                        </tr>
                    </tbody>
                  </table>        
              </form>
              <form class="form-horizontal">
                </fieldset>
                <fieldset class="legends choices"><legend><h4>Filter <i class="fa fa-plus-square"></i></h4><legend>
                <div class="dates" style="color:#fff; margin-top:25px;"><input style="color:#000; height:25px;" type="date" class="datepicker col-lg-3"><input  style="color:#000; height:25px;" type="date" class="datepicker col-lg-3"></div>
                </fieldset>
              </form>

              </div>
              </div>
          </div>
        </div>
    </div>
  </header>
  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Notification</h4>
      </div>
      <div class="modal-body">
        <div class="subject"></div>
        <br/>
        <div class="message"></div>
        <br/>
        <div class="date"></div>
        <br/>
        <div class="status"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

 <?php include 'inc/footer.php' ?>