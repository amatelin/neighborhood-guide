<?php 
    $page = "quartier";
    include './inc/header.php'; 
?>

    <div id="presentation">
        <h1>LE PLATEAU - MONT ROYAL</h1>

        <div class="viewer">
            <div class="fotorama" data-arrows="true" data-width="100%" data-nav="false" data-loop="true"data-autoplay="true">
                <img src="./img/mont3.jpg">
                <img src="./img/mont1.jpg">
                <img src="./img/mont2.jpg">
            </div>
            <div class="shadow">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum.
                </p>
                <img id="showMap" src="./img/Boussole.png">
            </div>
        </div>
    </div>

        <div id="map" class="viewer">
            <div class="mapbar shadow_map">
                <i class="fa fa-compass"></i> Map 
                <span class="piti">Cliquez ici pour ouvrir</span>
                <span class="right">LE PLATEAU</span>
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

         <?php // include './inc/footer.php'; ?>
        
    </body>
</html>
