<?php
    $page = "quartier";
    include './inc/header.php';
?>

    <div id="presentation">
        <div id="presentation-menu">
            <span class="right">
                <div class="next-neighbourhood-name"><a class="next-neighbourhood" href="#next">Cote St-Luc</a></div>
                <a href="#next"><i class="fa fa-arrow-left valign"></i></a>
                <h1> LE PLATEAU </h1>
                <a href="#next"><i class="fa fa-arrow-right valign"></i></a>
                <div class="next-neighbourhood-name"><a class="next-neighbourhood" href="#next">Westmount</a></div>
            </span>

        </div>
        <div id="viewer-top" class="viewer">
<!--             <img src="./img/mont3.jpg"> -->
            <div class="shadow scroll">
                <i class="fa fa-plus valign iphone-toggle"></i>
                <i class="fa fa-minus valign iphone-toggle"></i>
                <div class="col-lg-12 text-center">
                    <h2>Overview</h2>
                    <img src="img/white-star.png">
                    <br/>
                    <br>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur.
                    <br>
                    <img id="showMap" src="./img/Boussole.png">
                </p>
            </div>

            <div class="shadow-main scroll">
                <i class="fa fa-plus valign iphone-toggle"></i>
                <i class="fa fa-minus valign iphone-toggle"></i>
                <div class="col-lg-12 text-center">
                    <h2>The Neighbourhood</h2>
                    <img src="img/white-star.png">
                    <?php include './inc/breadcrumb.php' ?>
                    <br/>
                    <br/>
                </div>
                <div class="place scroll">
                    <li><a name="Restaurant" href="#">Restaurants <a href="addThing.php#restaurant"><i class="fa fa-plus"></i></a></a></li>
                    <ul class="scroll">
                        <li><a name="Au Petit Bigorneau" href="#">Au Petit Bigorneau</a></li>
                        <li><a name="Satisfaction" href="#">Satisfaction</a></li>
                        <li>test</li>
                        <li>test</li>
                    </ul>
                </div>
                <div class="place scroll">
                    <li>Cafes</li>
                    <ul class="scroll">
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </ul>
                </div>
                <div class="place scroll">
                    <li>Shopping</li>
                    <ul class="scroll">
                        <li>Stores</li>
                    </ul>
                </div>
                <div class="place scroll">
                    <li>Sports</li>
                    <ul class="scroll">
                        <li>Gyms</li>
                        <li>Soccer Fields</li>
                        <li>Baseball Fields</li>
                        <li>Swimming Pools</li>
                    </ul>
                </div>
                <div class="place scroll">
                    <li>Events</li>
                    <ul class="scroll">
                        <li>Shows</li>
                        <li>Festivals</li>
                        <li>Races</li>
                    </ul>
                </div>
                <div class="place scroll">
                    <li>Financial</li>
                    <ul class="scroll">
                        <li>Banks</li>
                        <li>ATMs</li>
                    </ul>
                </div>
                <div class="place scroll">
                    <li>Accommodations</li>
                    <ul class="scroll">
                        <li>Hotels</li>
                        <li>Motels</li>
                        <li>Camping</li>
                        <li>Bed Breakfast</li>
                        <li>Hostels</li>
                    </ul>
                </div>
                <div class="place scroll">
                    <li>Public Services</li>
                    <ul class="scroll">
                        <li>Police Stations</li>
                        <li>Fire Stations</li>
                        <li>Hospitals</li>
                        <li>Schools</li>
                        <li>CLSC</li>
                        <li>Library</li>
                    </ul>
                </div>
                <div class="place scroll">
                    <li>Transportation</li>
                    <ul class="scroll">
                        <li>Metro Stations</li>
                        <li>Bus Stations</li>
                        <li>Intercity Bus Station</li>
                        <li>Train Stations</li>
                        <li>Airports</li>
                    </ul>
                </div>
                <div id="padding_shadow_main">&nbsp;</div>
            </div>
        </div>
        <div id="map" class="viewer">
            <div class="mapbar shadow_map">
                <span id="mapbar-title"><i class="fa fa-compass"></i> Map <span class="small">Click to toggle</span></span>
                <span class="right">
                    <a class="goto prev" href="#WESTMOUNT"><i class="fa fa-arrow-left valign"></i></a>
                    <span class="goto name">LE PLATEAU</span>
                    <a class="goto next"href="#WESTMOUNT"><i class="fa fa-arrow-right valign"></i></a>
                </span>
            </div>
            <div id="map_canvas"></div>
            <div class="btn-group ico shadow_map">
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cutlery"></i></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Restaurant</a></li>
                        <li><a href="#">Café</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-default"><i class="fa fa-building"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-graduation-cap"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-tree"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-ambulance"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-usd"></i></button>
            </div>
            <div class="panel panel-default shadow_map">
                <div class="panel-heading"><span>Bons plans</span><i class="fa fa-times right"></i></div>
                <div class="panel-body scroll">
                    <!--
                    <div class="item">
                        <img class="mini" src="./img/resto.jpg">
                        <span class="stars"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></span>
                        <h3>La distillerie</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <div class="item">
                        <img class="mini" src="./img/resto.jpg">
                        <span class="stars"><i class="fa fa-star"></i> <i class="fa fa-star"></i></span>
                        <h3>Le rouge</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    </div>-->
                </div>
            </div>
        </div>



        <script id="item-template" type="text/x-handlebars-template">
            {{#each infos}}
                <div class="item scroll">
                    <img class="mini" src="./img/{{this.url}}.jpg">
                    <span class="stars">{{#times this.stars}} <i class="fa fa-star"></i>{{/times}}</span>
                    <h3>{{this.number}}. {{this.name}}</h3>
                    <p>{{this.desc}}</p>
                    <div class="mask scroll" name="{{this.name}}">
                        <p>Nb place : 3</p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            {{/each}}
            {{#page this.nb this.page}}
                <li {{#ifEq page value}}class="active"{{/ifEq}}><a href="#">{{value}}</a></li>
            {{/page}}
        </script>

    <?php include './inc/footer.php'; ?>
