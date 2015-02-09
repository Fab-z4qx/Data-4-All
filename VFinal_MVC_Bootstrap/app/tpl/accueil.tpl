<div id="accueil">
    <!-- MENU -->
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container-full">
                <a class="btn btn-navbar" toggle="collapse" target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <!--<img src="web/img/logos/logo_site_sans_bord_teal.png" class="img-responsive img-centered" alt="">-->
                <li class="divider pull-right"></li>

                <a class="brand " href="index.php">DATA 4 ALL</a>

                <div class="nav-collapse pull-right">
                    <ul class="nav">
                        <li><a class="page-scroll" href="#entreprise">Liste Entreprises</a></li>
                        <li><a class="page-scroll" href="#service">Services & Offres</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <fieldset class='textbox'>
    		                 <input class="input" type="text" placeholder="Username" />
    		                 <input class="input" type="password" placeholder="Passsword" />
    		               <a href="index.php?page=connect&action=login"> <input class="btn-primary" name="commit" type="submit" value="Log In" /> </a>
                        <li><a class="pull-right" href="#">mot de passe oublié</a></li>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"/> Remember me
                            </label>
                        </div>
    		            </fieldset>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /MENU -->
    <a href="entreprise.php?page=HomeEntreprise">entreprise</a>
    {if ({$error} == 'login_invalide')}
        <div class="error_login">error de login </div>
    {/if}
    <!-- CONTAINER FULL -->
    <div class="container-full">
        <!-- CAROUSEL -->
         <div id="myCarousel" class="carousel slide">
	      <div class="carousel-inner">
	        <div class="item active">
	          <img  src="web/img/test.jpg">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>description</h1>
	              <p class="lead">description</p>
	              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
	            </div>
	          </div>
	        </div>
	        <div class="item">
                <img  src="web/img/test.jpg">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>description</h1>
	              <p class="lead">description</p>
	              <a class="btn btn-large btn-primary" href="#">Learn more</a>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	            <img  src="web/img/test.jpg">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>description</h1>
	              <p class="lead">description</p>
	              <a class="btn btn-large btn-primary" href="#">description</a>
	            </div>
	          </div>
	        </div>
	      </div>
	      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	    </div>
        <!-- /CAROUSEL -->

        <!-- SERVICES & OFFRES -->
        <div class="container marketing">

            <!-- marketing -->

            <hr class="featurette-divider">

          <div class="featurette">
            <img class="featurette-image pull-right" src="web/img/offre.png">
            <h2 class="featurette-heading">Une plue-value pour l'entreprise<span class="muted">Description</span></h2>
            <p class="lead">explication</p>
          </div>

          <hr class="featurette-divider">

          <div class="featurette">
            <img class="featurette-image pull-left" src="web/img/offre.png">
            <h2 class="featurette-heading">Une transparence pour vous<span class="muted">See for yourself.</span></h2>
            <p class="lead">explication</p>
          </div>

          <hr class="featurette-divider">

          <div class="featurette">
            <img class="featurette-image pull-right" src="web/img/offre.png">
            <h2 class="featurette-heading ">Une bdd de folie<span class="muted">Checkmate.</span></h2>
            <p class="lead">explication</p>
          </div>

             <hr class="featurette-divider">

            <!-- SERVICES -->
            <div class="row">
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>BI</h2>
                    <p>Nous récoltons, organisons et hébergeons vos données et nous vous les rendons accessibles de sorte à vous offrir un recul sur votre activité et
                        à vous aider à prendre vos décisions. Nous offrons également un service d’assistance sur toutes question technique que vous pourriez avoir.</p>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Open Data</h2>
                    <p>Nous vous propulsons au-devant de la scène de l’Open Data ! Nous publions vos données sur notre plate-forme pour en permettre la réutilisation : vous
                        affichez ainsi votre transparence et avez une vision d’ensemble de voter activité mise en forme de manière lisible et intuitive.</p>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Prenium</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
            </div>
            <!-- /SERVICES -->

        <hr class="featurette-divider">

            <!-- OFFRES -->
            <table class="table table-striped ">
                <tbody>
                    <tr>
                        <th></th>
                        <th><h2>BI</h2></th>
                        <th><h2>Open Data</h2></th>
                        <th><h2>Prenium</h2></th>
                    </tr>
                    <tr>
                        <td><B>Prix de base</B></td>
                        <td>1600€/mois</td>
                        <td>2700€/mois</td>
                        <td>3500€/mois</td>
                    </tr>
                    <tr>
                        <td><B>Assistance & mise en service</B></td>
                        <td>YEP !</td>
                        <td>YEP !</td>
                        <td>YEP !</td>
                    </tr>
                    <tr>
                        <td><B>Stockage de base</B></td>
                        <td>Nop !</td>
                        <td>100 mo</td>
                        <td>200 mo</td>
                    </tr>
                    <tr>
                        <td><B>Stockage supplémentaire</B></td>
                        <td>row 3,col 2</td>
                        <td>row 3,col 3</td>
                        <td>row 1,col 3</td>
                    </tr>
                    <tr>
                        <td><B>Assistance 24/7</B></td>
                        <td>row 3,col 2</td>
                        <td>row 3,col 3</td>
                        <td>row 1,col 3</td>
                    </tr>
                </tbody>
            </table>
            <!-- /OFFRES -->

        <!-- /SERVICES & OFFRES -->
        </div>
        <hr class="featurette-divider">

        <!-- TEAM -->
        <div class="container team">
            <div class="row">
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/benjamin.jpg">
                    <span class="muted"><h3>BOURGEAUX</h3><h3> Benjamin</h3></span>
                    <p>Leader</p>
                    <p>Heureux de vivre !</p>
                    <p>Heureux de vivre !</p>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/thomas.jpg">
                    <span class="muted"><h3>De CHAMPS</h3><h3>Thomas</h3></span>
                    <p>Designer</p>
                    <p>Heureux de vivre !</p>
                    <p>Heureux de vivre !</p>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/etienne.jpg">
                    <span class="muted"><h3>DERBISE</h3><h3>Etienne</h3></span>
                    <p>Marketing</p>
                    <p>Heureux de vivre !</p>
                    <p>Heureux de vivre !</p>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/alexis.jpg">
                    <span class="muted"><h3>COSTA</h3><h3>Alexis</h3></span>
                    <p>Marketing</p>
                    <p>Heureux de vivre !</p>
                    <p>Heureux de vivre !</p>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>

                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/fabien.jpg">
                    <span class="muted"><h3>GENET</h3><h3>Fabien</h3></span>
                    <p>Developer</p>
                    <p>Heureux de vivre !</p>
                    <p>Heureux de vivre !</p>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/guillaume.jpg">
                    <span class="muted"><h3>PIGAUX</h3><h3>Guillaume</h3></span>
                    <p>Developer</p>
                    <p>Heureux de vivre !</p>
                    <p>Heureux de vivre !</p>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/tim.png">
                    <span class="muted"><h3>ROBERT</h3><h3>Timothée</h3></span>
                    <p>Developer</p>
                    <p>Heureux de vivre !</p>
                    <p>Heureux de vivre !</p>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <span class="muted"><h3>SRIPATHMANATHAN</h3><h3>Alain</h3></span>
                    <p>Developer</p>
                    <p>Heureux de vivre !</p>
                    <p>Heureux de vivre !</p>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <a class="btn btn-social-icon btn-facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- /TEAM -->
        <!-- CONTACT -->
        <!-- /CONTACT -->

    <!-- /CONTAINER FULL-->
    <!-- FOOTER -->
    <hr class="featurette-divider">

      <footer><center>
        <a href="#">Back to top</a>
        <p>© 2015 Data4All, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
              </center>
      </footer>

    </div>
</div>
<!-- /ACCUEIL -->
