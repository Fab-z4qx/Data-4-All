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
                <a class="brand " href="#">DATA 4 ALL</a>
                <div class="nav-collapse pull-right">
                    <ul class="nav">
                        <li><a class="page-scroll" href="#entreprise">Liste Entreprises</a></li>
                        <li><a class="page-scroll" href="#service">Services & Offres</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <fieldset class='textbox'>
    		                 <input class="input" type="text" placeholder="Username" />
    		                 <input class="input" type="password" placeholder="Passsword" />
    		               <a href="index.php?page=connect"> <input class="btn-primary" name="commit" type="submit" value="Log In" /> </a>
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
    {if ({$error} == 'index')}
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
              <div class="container">
                  <img  src="web/img/test.jpg">
                <div class="carousel-caption">
                  <h1>description</h1>
                  <p class="lead">description</p>
                  <a class="btn btn-large btn-primary" href="#">Learn more</a>
                </div>
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" slide="prev">‹</a>
          <a class="right carousel-control" href="#myCarousel" slide="next">›</a>
        </div>
        <!-- /CAROUSEL -->
        <!-- SERVICES & OFFRES -->
        <div class="container marketing">
            <!-- SERVICES -->
            <div class="row">
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>BI</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Open Data</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
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
                        <th><h2>D4A BI</h2></th>
                        <th><h2>D4A Open Data</h2></th>
                        <th><h2>D4A Prenium</h2></th>
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
        </div>
        <!-- /SERVICES & OFFRES -->
        <hr class="featurette-divider">
        <!-- TEAM -->
        <div class="container team">
            <div class="row">
                <div class="span3">
                    <img class="img-circle" src="web/img/team/benjamin.jpg">
                    <h2>BOURGEAUX Benjamin</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                </div>
                <div class="span3">
                    <img class="img-circle" src="web/img/team/thomas.jpg">
                    <h2>De CHAMPS Thomas</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
                <div class="span3">
                    <img class="img-circle" src="web/img/team/etienne.jpg">
                    <h2>DERBISE Etienne</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
                <div class="span3">
                    <img class="img-circle" src="web/img/team/alexis.jpg">
                    <h2>COSTA Alexis</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
            </div>
            <div class="row">
                <div class="span3">
                    <img class="img-circle" src="web/img/team/fabien.jpg">
                    <h2>GENET Fabien</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                </div>
                <div class="span3">
                    <img class="img-circle" src="web/img/team/guillaume.jpg">
                    <h2>PIGAUX Guillaume</h2>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
                <div class="span3">
                    <img class="img-circle" src="web/img/team/tim.png">
                    <h2>ROBERT Timothée</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
                <div class="span3">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>SRIPATHMANATHAN Alain</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                    <div class="span 3">
                        <a class="btn btn-social btn twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </div>
                    <div class="span 3">
                        facebook
                    </div>
                    <div class="span 3">
                        facebook
                    </div>
                </div>
            </div>
        </div>
        <!-- /TEAM -->
        <!-- CONTACT -->
        <!-- /CONTACT -->
    </div> 
    <!-- /CONTAINER FULL-->
</div>
<!-- /ACCUEIL -->