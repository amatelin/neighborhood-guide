
<?php
$page = "team";
include './inc/header.php'
?>
    <div id="admin-wrapper">
        <div class="col-lg-12">
            <h2 class="text-center">Administration</h2>
            <hr class="star-primary">
            <?php include './inc/breadcrumb.php' ?>
        </div>
        <div id="admin-menu">
            <ul class="compact">
                <li class="item-group current"><span><a href="#">This</a></span>
                    <ul>
                        <li><span><a href="#">Sub option 1</a></span></li>
                        <li class="current"><span><a href="#">Sub option of doom</a></span></li>
                        <li><span>Sub option 3</span></li>
                        <li><span>Sub option 4</span></li>
                    </ul>
                </li>
                <li><span>is</span></li>
                <li><span>just</span></li>
                <li><span>a</span></li>
                <li><span>lot</span></li>
                <li><span>of</span></li>
                <li><span>useless</span></li>
                <li class="item-group"><span><a href="#">lines</a></span>
                    <ul>
                        <li><span><a href="#">Sub option 1</a></span></li>
                        <li><span><a href="#">Sub option 2</a></span></li>
                        <li><span>Sub option 3</span></li>
                        <li><span>Sub option 4</span></li>
                    </ul>
                </li>
                <li><span>to</span></li>
                <li><span>simulate</span></li>
                <li><span>a</span></li>
                <li><span>menu</span></li>
                <li><span>with</span></li>
                <li><span>a</span></li>
                <li><span>whole</span></li>
                <li class="item-group"><span><a href="#">bunch</a></span>
                    <ul>
                        <li><span><a href="#">Sub option 1</a></span></li>
                        <li><span><a href="#">Sub option 2</a></span></li>
                        <li><span>Sub option 3</span></li>
                        <li><span>Sub option 4</span></li>
                    </ul>
                </li>
                <li><span>of</span></li>
                <li><span>various</span></li>
                <li><span>options.</span></li>
            </ul>
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
                            <td><a href="#" class="fa fa-lg fa-search"></a></td>

                        </tr>
                        <tr>
                            <th>Est End</th>
                            <td>Place</td>
                            <td>Just added a new neighborhood which was not there</td>
                            <td>31/01/2018 - 09:34:02</td>
                            <td><a href="profile.php">Bibi</a></td>
                            <td><a href="#" class="fa fa-lg fa-search"></a></td>
                        </tr>
                        <tr>
                            <th>Jo's coffee</th>
                            <td>Restaurant</td>
                            <td>This is a new coffee which just opened his doors</td>
                            <td>03/06/2014 - 13:52:35</td>
                            <td><a href="profile.php">Scar-Jo</a></td>
                            <td><a href="#" class="fa fa-lg fa-search"></a></td>
                        </tr>
                        <tr>
                            <th>Est End</th>
                            <td>Place</td>
                            <td>Just added a new neighborhood which was not there</td>
                            <td>31/01/2018 - 09:34:02</td>
                            <td><a href="profile.php">Bibi</a></td>
                            <td><a href="#" class="fa fa-lg fa-search"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pagination-wrapper">
                <ul class="pagination">
                    <li><a href="#" class="fa fa-angle-double-left"></a></li>
                    <li><a href="#">1</a></li>
                    <li class="disabled"><span>&hellip;</span></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li class="disabled"><a href="#">&hellip;</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#" class="fa fa-angle-double-right"></a></li>
                </ul>
            </div>
        </div>
    </div>

<?php include './inc/footer.php' ?>
