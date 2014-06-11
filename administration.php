
<?php
$page = "team";
include './inc/header.php'
?>
    <div id="admin-wrapper">
        <div class="col-lg-12 text-center">
            <h2>Administration</h2>
            <hr class="star-primary">
        </div>
        <ul id="admin-menu">
            <li class="item-group"><a href="#">This</a>
                <ul>
                    <li><a href="#">Sub option 1</a></li>
                    <li><a href="#">Sub option 2</a></li>
                    <li>Sub option 3</li>
                    <li>Sub option 4</li>
                </ul>
            </li>
            <li class="current">is</li>
            <li>just</li>
            <li>a</li>
            <li>lot</li>
            <li>of</li>
            <li>useless</li>
            <li class="item-group"><a href="#">lines</a>
                <ul>
                    <li><a href="#">Sub option 1</a></li>
                    <li><a href="#">Sub option 2</a></li>
                    <li>Sub option 3</li>
                    <li>Sub option 4</li>
                </ul>
            </li>
            <li>to</li>
            <li>simulate</li>
            <li>a</li>
            <li>menu</li>
            <li>with</li>
            <li>a</li>
            <li>whole</li>
            <li class="item-group"><a href="#">bunch</a>
                <ul>
                    <li><a href="#">Sub option 1</a></li>
                    <li><a href="#">Sub option 2</a></li>
                    <li>Sub option 3</li>
                    <li>Sub option 4</li>
                </ul>
            </li>
            <li>of</li>
            <li>various</li>
            <li>options</li>
            <li>that</li>
            <li>I</li>
            <li>still</li>
            <li>had</li>
            <li>to</li>
            <li>make</li>
            <li>bigger</li>
            <li>so</li>
            <li>it</li>
            <li>took</li>
            <li>enough</li>
            <li>space</li>
            <li>for</li>
            <li>my</li>
            <li>liking.</li>
        </ul>
        <div id="admin-content">
            <?php include './inc/breadcrumb.php' ?>
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
                            <td>Jo's coffee</td>
                            <td>Restaurant</td>
                            <td>This is a new coffee which just opened his doors</td>
                            <td>03/06/2014 - 13:52:35</td>
                            <td><a href="addThing.php">Scar-Jo</a></td>
                            <td><a href="#" class="fa fa-lg fa-search"></a></td>

                        </tr>
                        <tr>
                            <td>Est End</td>
                            <td>Place</td>
                            <td>Just added a new neighborhood which was not there</td>
                            <td>31/01/2018 - 09:34:02</td>
                            <td><a href="addThing.php">Bibi</a></td>
                            <td><a href="#" class="fa fa-lg fa-search"></a></td>
                        </tr>
                        <tr>
                            <td>Jo's coffee</td>
                            <td>Restaurant</td>
                            <td>This is a new coffee which just opened his doors</td>
                            <td>03/06/2014 - 13:52:35</td>
                            <td><a href="addThing.php">Scar-Jo</a></td>
                            <td><a href="#" class="fa fa-lg fa-search"></a></td>
                        </tr>
                        <tr>
                            <td>Est End</td>
                            <td>Place</td>
                            <td>Just added a new neighborhood which was not there</td>
                            <td>31/01/2018 - 09:34:02</td>
                            <td><a href="addThing.php">Bibi</a></td>
                            <td><a href="#" class="fa fa-lg fa-search"></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include './inc/footer.php' ?>
