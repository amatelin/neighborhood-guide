<?php 
    $page = "quartier";
    include './inc/header.php'; 
?>

    <div id="presentation">
        <div id="presentation-menu ">
            <span class="right">
                <a class="next-neighbourhood" href="#next">Cote St-Luc</a>
                <a href="#next"><i class="fa fa-arrow-left valign"></i></a>
                <h1> LE PLATEAU </h1>
                <a href="#next"><i class="fa fa-arrow-right valign"></i></a>
                <a class="next-neighbourhood" href="#next">Westmount</a>        
            </span>
            
            
        </div>
        <div class="viewer">
            <div class="fotorama" data-arrows="true" data-width="100%" data-nav="false" data-loop="true" data-autoplay="true">
                <img src="./img/mont3.jpg">
                <img src="./img/mont1.jpg">
                <img src="./img/mont2.jpg">
            </div>
            <div class="shadow">
                <div class="col-lg-12 text-center">
                    <h2>Overview</h2>
                    <img src="img/white-star.png">
                    <br/>
                    <br/>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                    eu fugiat nulla pariatur.
                </p>
                <img id="showMap" src="./img/Boussole.png">
            </div>
            
            <div class="shadow-main">
                <div class="col-lg-12 text-center">
                    <h2>The Neighbourhood</h2>
                    <img src="img/white-star.png">
                    <br/>
                    <br/>
                </div>
                <ul class="col-lg-3 shadow-column">
                    <li>Restaurants <a href="addResto.php"> <i class="fa fa-plus"></i></a></li> 
                   <ul>
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </ul>
                    <li>Cafes</li>
                    
                    <ul>
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                        <li>test</li>
                    </ul>
                </ul>
                <ul class="col-lg-3 shadow-column">
                    <li>Shopping</li>
                    <ul>
                        <li>Stores</li>
                    </ul>
                </ul>
                
                <ul class="col-lg-3 shadow-column">
                    <li>Sports</li>
                    <ul>
                        <li>Gyms</li>
                        <li>Soccer Fields</li>
                        <li>Baseball Fields</li>
                        <li>Swimming Pools</li>
                    </ul>
                </ul>
                <ul class="col-lg-3 shadow-column">
                    <li>Events</li>
                    <ul>
                        <li>Shows</li>
                        <li>Festivals</li>
                        <li>Races</li>
                    </ul>
                </ul>
                <ul class="col-lg-3 shadow-column">
                    <li>Financial</li>
                    <ul>
                        <li>Banks</li>
                        <li>ATMs</li>
                    </ul>
                </ul>
               <ul class="col-lg-3 shadow-column">
                    <li>Accommodations</li>
                    <ul>
                        <li>Hotels</li>
                        <li>Motels</li>
                        <li>Camping</li>
                        <li>Bed & Breakfast</li>
                        <li>Hostels</li>
                    </ul>
                </ul>
                <ul class="col-lg-3 shadow-column">
                    <li>Public Services</li>
                    <ul>
                        <li>Police Stations</li>
                        <li>Fire Stations</li>
                        <li>Hospitals</li>
                        <li>Schools</li>
                        <li>CLSC</li>
                        <li>Library</li>
                    </ul>
                </ul>
                <ul class="col-lg-3 shadow-column">
                    <li>Transportation</li>
                    <ul>
                        <li>Metro Stations</li>
                        <li>Bus Stations</li>
                        <li>Intercity Bus Station</li>
                        <li>Train Stations</li>
                        <li>Airports</li>
                    </ul>
                </ul>
                <ul class="col-lg-3 shadow-column">
                    <li>Financial</li>
                    <ul>
                        <li>Banks</li>
                        <li>ATMs</li>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
 
        <div id="map" class="viewer">
            <div class="mapbar shadow_map">
                <i class="fa fa-compass"></i> Map <span class="small">Click to toggle</span>               
                <span class="right">
                    <a href="#next"><i class="fa fa-arrow-left valign"></i></a> 
                     LE PLATEAU 
                    <a href="#next"><i class="fa fa-arrow-right valign"></i></a>
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
                <div class="panel-body">
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
                    </div>
                </div>
            </div>
        </div>

       
        
        <script id="item-template" type="text/x-handlebars-template">
            {{#each infos}}
                <div class="item">
                    <img class="mini" src="./img/{{this.url}}.jpg">
                    <span class="stars">{{#times this.stars}} <i class="fa fa-star"></i>{{/times}}</span>
                    <h3>{{this.name}}</h3>
                    <p>{{this.desc}}</p>
                </div>
            {{/each}}
        </script>

    <?php include './inc/footer.php'; ?>
