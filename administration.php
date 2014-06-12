
<?php
$page = "team";
include './inc/header.php'
?>
    <div class="background"></div>
    <div id="admin-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Administration</h2>
                <hr class="star-primary">
                <?php include './inc/breadcrumb.php' ?>
            </div>
        </div>
        <div class="row">
            <div id="admin-menu" class="compact">
                <div class="menu">
                    <ul>
                        <li class="item-group current"><span><a href="#new">New</a></span>
                            <ul>
                                <li class="item-group current"><span><a href="#submissions">Submissions</a></span>
                                    <ul>
                                        <li><span><a href="newsubmissions.php">A submission type</a></span></li>
                                        <li class="current"><span><a href="newsubmissions.php">Another submission type</a></span></li>
                                    </ul>
                                </li>
                                <li><span><a href="newcategories.php">Categories</a></span></li>
                                <li><span><a href="newusers.php">Users</a></li>
                            </ul>
                        </li>
                        <li><span><a href="modificationsmanagement.php">Modified</a></span></li>
                        <li><span><a href="notifications.php">Notifications</a></span></li>
                        <li class="item-group"><span><a href="#manage">Manage</a></span>
                            <ul>
                                <li><span><a href="manageplaces.php">Places</a></span></li>
                                <li><span><a href="managecategories.php">Categories</a></span></li>
                                <li><span><a href="manageusers.php">Users</a></span></li>
                            </ul>
                        </li>
                        <li><span><a href="dashboardmanagement.php">Dashboard management</a></span></li>
                    </ul>

                </div>
                <div class="btn-wrapper">
                    <button type="button" class="btn visible-xs"><i class="fa"></i></button>
                </div>
            </div>
            <div id="admin-content">
                <div class="table-wrapper">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Categorie</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Author</th>
                                <th>Review</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Jo's coffee</th>
                                <td>Restaurant</td>
                                <td>This is a new coffee which just opened his doors</td>
                                <td>03/06/2014 - 13:52:35</td>
                                <td><a href="profile.php">Scar-Jo</a></td>
                                <td><a href="#review" data-toggle="modal" class="fa fa-lg fa-search"></a></td>

                            </tr>
                            <tr>
                                <th>Est End</th>
                                <td>Place</td>
                                <td>Just added a new neighborhood which was not there</td>
                                <td>31/01/2018 - 09:34:02</td>
                                <td><a href="profile.php">Bibi</a></td>
                                <td><a href="#review" data-toggle="modal" class="fa fa-lg fa-search"></a></td>
                            </tr>
                            <tr>
                                <th>Jo's coffee</th>
                                <td>Restaurant</td>
                                <td>This is a new coffee which just opened his doors</td>
                                <td>03/06/2014 - 13:52:35</td>
                                <td><a href="profile.php">Scar-Jo</a></td>
                                <td><a href="#review" data-toggle="modal" class="fa fa-lg fa-search"></a></td>
                            </tr>
                            <tr>
                                <th>Est End</th>
                                <td>Place</td>
                                <td>Just added a new neighborhood which was not there</td>
                                <td>31/01/2018 - 09:34:02</td>
                                <td><a href="profile.php">Bibi</a></td>
                                <td><a href="#review" data-toggle="modal" class="fa fa-lg fa-search"></a></td>
                            </tr>
                            <tr>
                                <th>Jo's coffee</th>
                                <td>Restaurant</td>
                                <td>This is a new coffee which just opened his doors</td>
                                <td>03/06/2014 - 13:52:35</td>
                                <td><a href="profile.php">Scar-Jo</a></td>
                                <td><a href="#review" data-toggle="modal" class="fa fa-lg fa-search"></a></td>

                            </tr>
                            <tr>
                                <th>Est End</th>
                                <td>Place</td>
                                <td>Just added a new neighborhood which was not there</td>
                                <td>31/01/2018 - 09:34:02</td>
                                <td><a href="profile.php">Bibi</a></td>
                                <td><a href="#review" data-toggle="modal" class="fa fa-lg fa-search"></a></td>
                            </tr>
                            <tr>
                                <th>Jo's coffee</th>
                                <td>Restaurant</td>
                                <td>This is a new coffee which just opened his doors</td>
                                <td>03/06/2014 - 13:52:35</td>
                                <td><a href="profile.php">Scar-Jo</a></td>
                                <td><a href="#review" data-toggle="modal" class="fa fa-lg fa-search"></a></td>
                            </tr>
                            <tr>
                                <th>Est End</th>
                                <td>Place</td>
                                <td>Just added a new neighborhood which was not there</td>
                                <td>31/01/2018 - 09:34:02</td>
                                <td><a href="profile.php">Bibi</a></td>
                                <td><a href="#review" data-toggle="modal" class="fa fa-lg fa-search"></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <ul class="pagination">
                    <li><a href="#" class="fa fa-angle-double-left"></a></li>
                    <li><a href="#">1</a></li>
                    <li class="disabled"><span>&hellip;</span></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#" class="current">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#" class="fa fa-angle-double-right"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal Dialog -->
    <div id="review" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Review" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close fa fa-times" data-dismiss="modal" aria-hidden="true"></button>
                    <h3 class="modal-title">Reviewing Jo's Coffee submission</h3>
                </div>
                <div class="modal-body">
                    <h2>Details</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dictum odio in urna molestie, non aliquet dolor imperdiet.
                        Aenean aliquet massa id erat tincidunt luctus. Nulla in imperdiet odio. Morbi leo turpis, luctus at tellus vel, fermentum
                        imperdiet eros. Vestibulum neque sapien, euismod ac commodo non, dignissim nec est. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In malesuada odio eget mollis malesuada. Vestibulum suscipit malesuada dictum. Vivamus fringilla mollis nisi
                        nec vehicula. Curabitur luctus velit ut consequat suscipit. Pellentesque accumsan pharetra elit, ut euismod diam rhoncus at.
                        Phasellus non lacinia eros, eget imperdiet lacus. Aenean varius sapien nulla.</p>
                    <p>Maecenas dictum velit quis elit accumsan, vitae porta magna viverra. Nunc scelerisque laoreet urna, nec facilisis massa ornare
                        ut. Mauris eros libero, imperdiet non tempus ut, rhoncus et metus. Ut elementum, mauris et posuere blandit, ante eros varius
                        diam, congue semper leo magna ac turpis. Donec cursus justo quis felis aliquam venenatis. Interdum et malesuada fames ac ante
                        ipsum primis in faucibus. Ut in ipsum sagittis, ultricies eros sed, tincidunt nibh. Praesent consequat consequat erat, in
                        ullamcorper quam molestie vel. Sed sollicitudin nibh ut ipsum faucibus, sed ornare ante lacinia. Nulla mi ante, ultrices sed
                        vestibulum nec, semper lobortis justo.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Accept</button>
                    <button type="button" class="btn btn-danger">Reject</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

<?php include './inc/footer.php' ?>
