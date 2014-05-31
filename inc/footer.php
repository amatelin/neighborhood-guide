   <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Address</h3>
                        <p>1009 rue de Bleury
                            <br>Monteal, QC H1L1L1</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Social Networks</h3>
                        <ul class="list-inline">
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About NestFinder</h3>
                        <p>
                            Nestfinder is a startup created by young Montreal entrepreneurs.
                            Visit the <a href="#">blog</a> to follow this project's progress.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - NestFinder
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="modal-body">
                            <h2>Le Plateau - Mont Royal</h2>
                            <hr class="star-primary">
                            <img src="img/neighborhoods/6/cover_img.jpg" class="img-responsive img-centered" alt="">
                            <ul class="nav nav-pills nav-justified">
                                <li class='active'><a href="#intro" data-toggle="tab">Le Quartier</a></li>
                                <li><a href="#lifestyle" data-toggle="tab">En savoir plus</a></li>
                                <li><a href="#around" data-toggle="tab">Les Bons Coins</a></li>
                                <li><a href="#market_snapshot" data-toggle="tab">Statistiques</a></li>
                            </ul>
                            <div class="tab-content">
                            <div class='tab-pane fade in active' id="intro">
                                <div class='col-md-7'>
                                    <div class='description'>
                                        <blockquote class="tagline"><p>Le Plateau, c'est beau !</p></blockquote>
                                        <p></p>
                                    </div>
                                    <div id='map-canvas'></div>
                                    <div class='row'>
                                        <div class='col-md-6 transit-col'>
                                            <h4 class='transit-title'>
                                                <img class='transit-icon' src='img/bus-icon.png'/>
                                                Lignes de bus
                                            </h4>
                                            <ul class='list-inline transit-inline'>
                                                <!--
                                                @foreach($bus_lines as $bl)
                                                <li><p>{{$bl}}</p></li>
                                                @endforeach
                                                -->
                                            </ul>
                                        </div>
                                        <div class='col-md-6 transit-col'>
                                            <h4 class='transit-title'>
                                                <img class='transit-icon' src="img/metro-icon.png"/>
                                                Stations de métro
                                            </h4>
                                            <table class="metro-stations">
                                                <!--
                                                @foreach($metro_stations as $ms)
                                                <tr>
                                                    <td>{{ HTML::link('http://www.stm.info/en/info/networks/metro/'.strtolower($ms->name), $ms->name, array('target'=>'_blank')) }}</td>
                                                    <td class='lines'>
                                                        @foreach(explode(',',$ms->description) as $line)
                                                        <span class='line-visual line-{{$line}}'></span>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                                @endforeach
                                                -->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-5'>
                                    <div class='snapshot'>
                                        <!--
                                        @foreach($details as $i => $d)
                                        <div class='well'>
                                            <h4><span class='glyphicon glyphicon-{{ $d[0] }}'></span>{{ $d[1] }}</h4>
                                            <p>{{ strlen($d[2]) < 150 ? $d[2] : substr($d[2], 0, 150).'... '.HTML::link('#', 'Lire la suite', array('class'=>'go-to-tab', 'data-index'=>$i)) }}</p>
                                        </div>
                                        @endforeach
                                        -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="lifestyle">
                                <div class="col-xs-12">
                                    <div class="swiper-tabs">
                                        <!--
                                        @foreach($details as $i => $d)
                                        <div class="tab {{ $i == 0 ? 'active' : '' }}"><a href="#">{{ $d[1] }}</a></div>
                                        @endforeach

                                        -->
                                    </div>
                                </div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!--
                                        @foreach($details as $i => $d)
                                        <div class="swiper-slide">
                                            <div class='col-md-12'><h3><i class="glyphicon glyphicon-{{ $d[0] }}"></i> {{ $d[1] }}</h3></div>
                                            <div class='col-md-5'>
                                                <div class="well"><p>{{ $d[2] }}</p></div>
                                            </div>
                                            <div class='col-md-7'>
                                                <div class="thumbnail">
                                                    @for($j = 1; $j<5; $j++)
                                                    <?php $path = asset("img/neighborhoods/$neighborhood->getUuid()/$i/$j.jpg") ?>
                                                    <div class='slider-image col-sm-6' style='background-image: url({{ $path }});'></div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="around">
                                <div id='box-container' class="col-xs-12">
                                <!--
                                    @foreach($category_ids as $key => $value)
                                    <div class='around-box'>
                                        <div class='box' id='box-{{$n}}'>
                                            <h1>{{$key}}</h1>
                                            @if(isset($interests[$value]))
                                            <div class='interest-square'>
                                                @foreach($interests[$value] as $ci[$n])
                                                <div class='col-md-6 interest-holder'>
                                                    <h4>{{$ci[$n]->name}}</h4>
                                                    <p>{{$ci[$n]->address}}</p>
                                                    <p>{{$ci[$n]->description}}</p>
                                                    <span class='interest-img' style='background-image: url({{$ci[$n]->cover_img}})'></span>
                                                </div>
                                                @endforeach
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                    @if ($n==1)
                                    <div class='around-box'>
                                        <div class='box' id='box-1-bis'>
                                            <h1>Aujourd'hui, <br/><br/> je suis d'humeur...</h1>
                                        </div>
                                    </div>
                                    @endif
                                    <?php $n += 1; ?>
                                    @endforeach
                                -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="market_snapshot">
                                <div class='market-snap-row'>
                                    <div class='col-md-6' style="">
                                        <h2>Type de logements</h2>
                                        <div class="panel panel-default col-md-12">
                                            <div class='panel-body col-md-6'>
                                                <div class="duplex housing-img col-md-6"></div>
                                                <canvas id="chart-1"  width="115" height="114"></canvas>
                                                <div class="chart-value" id="value-1">10%</div>
                                                <div class="col-md-12">
                                                    <h4>Maison individuelle</h4>
                                                </div>

                                            </div>
                                            <div class='panel-body col-md-6'>
                                                <div class="townhouse housing-img col-md-6"></div>
                                                <canvas id="chart-2"  width="115" height="114"></canvas>
                                                <div class="chart-value" id="value-2">20%</div>
                                                <div class="col-md-12">
                                                    <h4>Maison de ville</h4>
                                                </div>

                                            </div>
                                            <div class='panel-body col-md-6'>
                                                <div class="largebuilding housing-img col-md-6"></div>
                                                <canvas id="chart-3"  width="115" height="114"></canvas>
                                                <div class="chart-value" id="value-3">25%</div>
                                                <div class="col-md-12">
                                                    <h4>Immeuble de 5 étages ou plus</h4>
                                                </div>

                                            </div>
                                            <div class="panel-body col-md-6">
                                                <div class="smallbuilding housing-img col-md-6"></div>
                                                <canvas id="chart-4"  width="115" height="114"></canvas>
                                                <div class="chart-value" id="value-4">30%</div>
                                                <div class="col-md-12">
                                                    <h4>Immeuble de moins de 5 étages</h4>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class='col-md-6'>
                                        <h2>L'immobilier en chiffres</h2>
                                        <div class="panel panel-default col-md-12">
                                            <div class='panel panel-body col-md-12'>
                                                <h4>Répartition des foyers</h4>
                                                <div class="horizontal-bar-chart green pull-right" style="width:40%">
                                                    Propriétaires
                                                </div>
                                                <div class="horizontal-bar-chart grey pull-left" style="width:60%">
                                                    Locataires
                                                </div>
                                            </div>
                                            <div class='panel panel-body col-md-12'>
                                                <h4>Prix médian à l'achat</h4>
                                                <div class="horizontal-bar-chart large-value-display blue">$154'000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='market-snap-row'>
                                    <div class="col-md-6">
                                        <h2>La population</h2>
                                        <div class="panel panel-default col-md-12">
                                            <div class='panel panel-body col-md-12'>
                                                <div class="horizontal-bar-chart pull-left blue medium-value-display" style="width: 65%">
                                                    54098
                                                </div>

                                                <div class="horizontal-bar-chart pull-right grey" style="width:35%">
                                                   1546 par km²
                                                </div>
                                                <h4 class="pull-left chart-title" style="width:65%">Population totale</h4>
                                                <h4 class="pull-right chart-title" style="width:35%">Densité</h4>
                                            </div>
                                            <div class='panel panel-body col-md-12'>
                                                <div class="col-md-12">
                                                    <h4 class="pull-left">
                                                        <span class="pull-left glyphicon glyphicon-info-sign"></span>&nbsp;
                                                        Age median
                                                    </h4>
                                                    <div class="circle-value blue pull-left">34 ans</div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h4 class="pull-left">
                                                        <span class="pull-left glyphicon glyphicon-info-sign"></span>&nbsp;
                                                        % de la population au dessus de 15 ans
                                                    </h4>
                                                    <canvas class="pull-right" id="chart-5"  width="85" height="85"></canvas>
                                                    <div class="hide" id="value-5">24%</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <h2>Diversité</h2>
                                        <div class="panel panel-default col-md-12">
                                            <div class="panel-body col-md-12">
                                                <h4>Origine</h4>
                                                <div class="horizontal-bar-chart green pull-right" style="width:20%">
                                                    Immigrés
                                                </div>
                                                <div class="horizontal-bar-chart grey pull-left" style="width:80%">
                                                    Natifs
                                                </div>

                                            </div>
                                            <div class="panel-body col-md-12">
                                                <h4>Langue parlée dans le foyer</h4>
                                                <div class="horizontal-bar-chart blue pull-left" style="width:60%; padding-left:0">
                                                    Français
                                                </div>
                                                <div class="horizontal-bar-chart green pull-left" style="width:30%; padding-left:5px">
                                                    Anglais
                                                </div>
                                                <div class="horizontal-bar-chart grey pull-right" style="width:10%; padding-left:5px">
                                                    Autre
                                                </div>
                                            </div>
                                            <div class="panel-body col-md-12">
                                                <h4 class="pull-left" style="width:75%">
                                                    <span class="pull-left glyphicon glyphicon-info-sign"></span>
                                                    Habitants ayant suivis des études universitaires
                                                </h4>
                                                <canvas class="pull-right" id="chart-6"  width="85" height="85"></canvas>
                                                <div class="hide" id="value-6">24%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <h2>Le marché de l'emploi</h2>
                                        <div class="col-md-12 panel panel-default">
                                            <div class="col-md-6 panel-body">
                                                <h4>Revenu individuel moyen</h4>
                                                <div class="horizontal-bar-chart large-value-display green">$42000</div>
                                            </div>
                                            <div class="col-md-6 panel-body">
                                                <h4>Revenu individuel médian</h4>
                                                <div class="horizontal-bar-chart large-value-display blue">$45000</div>
                                            </div>
                                            <div class="col-md-12 panel-body">
                                                <h4 class="pull-left">
                                                    <span class="pull-left glyphicon glyphicon-info-sign"></span>&nbsp
                                                    Taux de chômage
                                                </h4>
                                                <div class="circle-value grey pull-left">
                                                    7%
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="./js/freelancer.js"></script>

</body>

</html>
