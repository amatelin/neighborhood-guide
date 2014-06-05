
<?php 
$page = "team";
include './inc/header.php' 
?>

     <header>
        <div class="moderationqueue-wrapper">
             <div class="row title">
                <div class="col-lg-4 col-lg-offset-4">     <!--col-lg-offset-3-->

                        <div class="intro-text ">                       
                            <span class="name">Administration panel</span>
                            <img src="img/white-star.png">
                        </div>
                </div>
            </div>
            <div class="row content">
                <div class="col-lg-2" id="menu">
                    <div class="intro-text-admin-menu">
                        <ul>
                            <li>
                                <a href="">New</a>
                                <ul>
                                    <li><a href="newplaces.php">Places&nbsp;/&nbsp;Submissions</a></li>
                                    <li><a href="newusers.php">Users</a></li>
                                    <li><a href="newcategories.php">Categories</a></li>
                                </ul>
                            </li>
                            <li><a href="users.php">Users</a></li>
                            <li><a href="places.php">Places</a></li>
                            <li><a href="categories.php">Categories</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" id="central">     <!--col-lg-offset-3-->

                    <div class="intro-text-admin table-responsive"> 
                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Added</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th>Accept</th>
                                    <th>Refuse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Central Montreal</td>
                                    <td>03/06/2014 - 13:52:35</td>
                                    <td>Scar-Jo</td>
                                    <td><a><i class="fa fa-check"></i></a></td>
                                    <td><a><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Est End</td>
                                    <td>31/01/2018 - 09:34:02</td>
                                    <td>Bibi</td>
                                    <td><a><i class="fa fa-check"></i></a></td>
                                    <td><a><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>West Montreal</td>
                                    <td>03/06/2014 - 13:52:35</td>
                                    <td>Riri</td>
                                    <td><a><i class="fa fa-check"></i></a></td>
                                    <td><a><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>North Montreal</td>
                                    <td>31/01/2018 - 09:34:02</td>
                                    <td>Fifi</td>
                                    <td><a><i class="fa fa-check"></i></a></td>
                                    <td><a><i class="fa fa-times"></i></a></td>
                                </tr>
                            </tbody>
                        </table>

                    </div> 

                    <div class="intro-text-admin table-responsive"> 
                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Modification</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th>Explanations</th>
                                    <th>Accept</th>
                                    <th>Refuse</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Montreal</td>
                                    <td>03/06/2014 - 13:52:35</td>
                                    <td>Scar-Jo</td>
                                    <td>Dont need to explain</td>
                                    <td><a><i class="fa fa-check"></i></a></td>
                                    <td><a><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Eat End picture</td>
                                    <td>31/01/2018 - 09:34:02</td>
                                    <td>Bibi</td>
                                    <td>View has changed</td>
                                    <td><a><i class="fa fa-check"></i></a></td>
                                    <td><a><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>West Montreal Description</td>
                                    <td>03/06/2014 - 13:52:35</td>
                                    <td>Riri</td>
                                    <td>Things have changed</td>
                                    <td><a><i class="fa fa-check"></i></a></td>
                                    <td><a><i class="fa fa-times"></i></a></td>
                                </tr>
                                <tr>
                                    <td>North Montreal location</td>
                                    <td>31/01/2018 - 09:34:02</td>
                                    <td>Fifi</td>
                                    <td>Earth has moved</td>
                                    <td><a><i class="fa fa-check"></i></a></td>
                                    <td><a><i class="fa fa-times"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="info">
                    <div class="col-lg-3">                    
                        <div class="sidebar">
                            <div class="intro-text-admin-right">
                                <span class="name"><h3>New Members</h3></span> 
                                <hr>
                                <ul>
                                    <li><a href="">Yann Hardouin</a></li>
                                    <li><a href="">Scar-Jo</a></li>
                                    <li><a href="">Dric-Cé</a></li>
                                    <li><a href="">Axel</a></li>
                                    <li><a href="">Philou</a></li>
                                    <br/>
                                    <li><a href=""> ... More ...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">                    
                        <div class="sidebar">
                            <div class="intro-text-admin-right">
                                <span class="name"><h3>Users Management</h3></span> 
                                <hr>
                                <ul>
                                    <li><a href="">Yann Hardouin</a></li>
                                    <li><a href="">Scar-Jo</a></li>
                                    <li><a href="">Dric-Cé</a></li>
                                    <li><a href="">Axel</a></li>
                                    <li><a href="">Philou</a></li>
                                    <br/>
                                    <li><a href="users.php">... More ...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">                    
                        <div class="sidebar">
                            <div class="intro-text-admin-right">
                                <span class="name"><h3>Notifications</h3></span> 
                                <hr>
                                <ul>
                                    <li><a href="">Scar-Jo </a></li>
                                    <li><a href="">Scar-Jo</a></li>
                                    <li><a href="">Dric-Cé</a></li>
                                    <li><a href="">Axel</a></li>
                                    <li><a href="">Philou</a></li>
                                    <br/>
                                    <li><a href="">... More ...</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>       

            </div>            
        </div>
    </header>
    <section class="adjustement">
    </section>
 <?php include 'inc/footer.php' ?>