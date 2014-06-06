
<?php 
$page = "team";
include './inc/header.php' 
?>

     <header>
        <div class="moderationqueue-wrapper">
            <div class="row title">
                <div class="col-lg-4 col-lg-offset-4">     <!--col-lg-offset-3-->

                        <div class="intro-text">                       
                            <span class="name">Users Management</span>
                            <img src="img/white-star.png">
                        </div>
                </div>
            </div>


            <div class="row">
                <?php 
                    include './inc/menu.php'           
                ?>

                <div class="col-lg-6" id="central"> 
                    

                    <div class="intro-text-admin table-responsive">
                        <div class="col-lg-2" style="float:right;">
                            <input id="searchinput" name="searchinput" placeholder="Search" class="form-control input-md" type="search">
                        </div>                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Register date</th>
                                    <th>Email</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="profile.php">Scar-Jol</a></td>
                                    <td>03/06/2014 - 13:52:35</td>
                                    <td>Scar-Jo@irestful.com</td>
                                    <td>Joscar</td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">User</option>
                                          <option value="">Moderator</option>
                                          <option value="">Super Moderator</option>
                                          <option value="">Admin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">Actif</option>
                                          <option value="">Suspended</option>
                                          <option value="">Banned</option>
                                          <option value="">Terminated</option>
                                        </select>
                                    </td>

                                </tr>
                                <tr>
                                    <td><a href="profile.php">Dric-Ce</a></td>
                                    <td>01/12/2015 - 10:58:15</td>
                                    <td>Cedric@irestful.com</td>
                                    <td>Cedric</td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">User</option>
                                          <option value="">Moderator</option>
                                          <option value="">Super Moderator</option>
                                          <option value="">Admin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">Actif</option>
                                          <option value="">Suspended</option>
                                          <option value="">Banned</option>
                                          <option value="">Terminated</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="profile.php">Scar-Jol</a></td>
                                    <td>03/06/2014 - 13:52:35</td>
                                    <td>Scar-Jo@irestful.com</td>
                                    <td>Joscar</td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">User</option>
                                          <option value="">Moderator</option>
                                          <option value="">Super Moderator</option>
                                          <option value="">Admin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">Actif</option>
                                          <option value="">Suspended</option>
                                          <option value="">Banned</option>
                                          <option value="">Terminated</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="profile.php">Dric-Ce</a></td>
                                    <td>01/12/2015 - 10:58:15</td>
                                    <td>Cedric@irestful.com</td>
                                    <td>Cedric</td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">User</option>
                                          <option value="">Moderator</option>
                                          <option value="">Super Moderator</option>
                                          <option value="">Admin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">Actif</option>
                                          <option value="">Suspended</option>
                                          <option value="">Banned</option>
                                          <option value="">Terminated</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="profile.php">Scar-Jol</a></td>
                                    <td>03/06/2014 - 13:52:35</td>
                                    <td>Scar-Jo@irestful.com</td>
                                    <td>Joscar</td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">User</option>
                                          <option value="">Moderator</option>
                                          <option value="">Super Moderator</option>
                                          <option value="">Admin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">Actif</option>
                                          <option value="">Suspended</option>
                                          <option value="">Banned</option>
                                          <option value="">Terminated</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="profile.php">Dric-Ce</a></td>
                                    <td>01/12/2015 - 10:58:15</td>
                                    <td>Cedric@irestful.com</td>
                                    <td>Cedric</td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">User</option>
                                          <option value="">Moderator</option>
                                          <option value="">Super Moderator</option>
                                          <option value="">Admin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">Actif</option>
                                          <option value="">Suspended</option>
                                          <option value="">Banned</option>
                                          <option value="">Terminated</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="profile.php">Scar-Jol</a></td>
                                    <td>03/06/2014 - 13:52:35</td>
                                    <td>Scar-Jo@irestful.com</td>
                                    <td>Joscar</td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">User</option>
                                          <option value="">Moderator</option>
                                          <option value="">Super Moderator</option>
                                          <option value="">Admin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">Actif</option>
                                          <option value="">Suspended</option>
                                          <option value="">Banned</option>
                                          <option value="">Terminated</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="profile.php">Dric-Ce</a></td>
                                    <td>01/12/2015 - 10:58:15</td>
                                    <td>Cedric@irestful.com</td>
                                    <td>Cedric</td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">User</option>
                                          <option value="">Moderator</option>
                                          <option value="">Super Moderator</option>
                                          <option value="">Admin</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select id="selectbasic" name="selectbasic" class="form-control">
                                          <option value="">Actif</option>
                                          <option value="">Suspended</option>
                                          <option value="">Banned</option>
                                          <option value="">Terminated</option>
                                        </select>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button id="validUser" name="singlebutton" class="btn btn-primary">Validate</button>
                    </div> 

                </div>
            </div>            
        </div>
    </header>
 <?php include 'inc/footer.php' ?>