
    <footer class="text-center">
        <div class="footer-above footer-spacer">
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
                            Visit the <a href="team.php">team</a> page to learn more about us!
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

    <!-- Javascript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="./js/handlebars-v1.3.0.js"></script>
    <script src="./js/fotorama.js"></script>


    <?php if ($page == "quartier"): ?>

        <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsp30dcLedKh-rLy6H_QNGvs1RYPiLb4s&sensor=TRUE">
        </script>
        <script src="./js/quartier.js"></script>

    <?php endif; ?>

    </body>
</html>
