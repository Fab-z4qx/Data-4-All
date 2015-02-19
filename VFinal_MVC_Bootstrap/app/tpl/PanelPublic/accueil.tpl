<div id="accueil">
    <!-- MENU -->
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container-full">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <img src="web/img/logos/logo_site_sans_bord_teal.png" class="img-responsive img-centered" alt="">
                <li class="divider pull-right"></li>
                <a class="brand " href="index.php">DATA 4 ALL</a>
                <div class="nav-collapse pull-right">
                    <ul class="nav">
                        <li><a class="page-scroll" href="index.php?page=index&action=entreprise">Liste Entreprises</a></li>
                        <li><a class="page-scroll" href="#service">Services & Offres</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <li> <form class='textbox' action="index.php?page=connect&action=login" method="post">
                                 <input class="input" type="text" name="login" id="name" placeholder="Username" />
                                 <input class="input" type="password" name="password" id="password" placeholder="Passsword" />
                                 <input class="btn-primary" type="submit" value="OK"/>
                                 <div class="checkbox">
                                     <label>
                                        <input type="checkbox"/> Remember me
                                        <a class="offset1" href="#">Mot de passe oublié </a>
                                        <a class="pull-right accordion-toggle" href="#item1" data-parent="#monaccordeon" data-toggle="collapse">S'inscrire</a>
                                    </label>
                                 </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- /MENU -->
    {if ({$error} == 'login_invalide')}
        <div class="error_login">error de login </div>
    {/if}

<!-- Inscription -->
    <div id="monaccordeon">
            <div class="accordion-group">
                <div class="accordion-heading">
                    <div id="item1" class="collapse">
                        <div class="accordion-inner">
                            <form method="post" action="index.php?page=formulaire&action=createAccount"></br>
                               <div class="span5">
                                    <label class="form_entreprise" for="nom_entreprise">Nom entreprise :</label>
                                    <input type="text" name="nom_entreprise" id="nom_entreprise"/><br><br>

                                    <label class="form_entreprise" for="email_entreprise">Email :</label>
                                    <input type="email_entreprise" name="email_entreprise" id="email_entreprise" require /><br><br>

                                    <label class="form_entreprise" for="adresse">Adresse :</label>
                                    <input type="text" name="adresse" id="adresse" require/><br><br>

                                    <label class="form_entreprise" for="adresse_complementaire">Adresse complémentaire :</label>
                                    <input type="text" name="adresse_complementaire" id="adresse_complementaire"/><br><br>

                                    <label class="form_entreprise" for="ville">Ville :</label>
                                    <input type="text" name="ville" id="ville"/><br><br>
                                </div>
                                <div class="span5">
                                    <label class="form_entreprise" for="code_postal">Code Postale :</label>
                                    <input type="text" name="code_postal" id="code_postal"/><br><br>

                                    <label class="form_entreprise" for="pays">Pays :</label>
                                    <input type="text" name="pays" id="pays"/><br><br>

                                    <label class="form_entreprise" for="tel_entreprise">Tel :</label>
                                    <input type="text" name="tel_entreprise" id="tel_entreprise"/><br><br>

                                    <label class="form_entreprise" for="fax_entrepirse">Fax :</label>
                                    <input type="text" name="fax_entreprise" id="fax_entreprise"/><br><br>

                                    <label class="form_entreprise" for="siret_entreprise">Numéro Siret :</label>
                                    <input type="text" name="siret_entreprise" id="siret_entreprise"/><br><br>
                                </div>
                                <div class="span5">
                                    <label class="form_entreprise" for="forme_juridique_entreprise">Forme juridique :</label>
                                    <input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise"/><br><br>

                                    <label class="form_entreprise" for="activite_entreprise">Description de l'activité de l'entreprise :</label>
                                    <textarea style="resize:none;" rows="1" cols="18" name="activite_entreprise" id="activite_entreprise"></textarea><br><br>

                                    <label class="form_entreprise" for="password">Mot de passe :</label>
                                    <input type="password" name="password" id="password" require /><br><br>

                                    <label class="form_entreprise" for="password_confirmation">Confirmation du mot de passe :</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" require /><br><br>

                                    <script type="text/javascript">
                                        $(document).ready(function() {
                                        $('#captcha2').html($('#captcha').clone(true,true));
                                        });
                                    </script>
                                    <div id="captcha2"></div>
                                    <input class="bouton_submit" type="submit" value="Continuer">
                                </div>
                            </form>
                        </div>
                     </div>
                </div>
            </div>
        </div>

<!-- CONTAINER FULL -->
<div class="container-full">
<!-- CAROUSEL -->
         <div id="myCarousel" class="carousel slide">
	      <div class="carousel-inner">
	        <div class="item active">
	          <img  src="web/img/test.jpg">
	          <div class="container">
	            <div class="carousel-caption offset4">
	              <div id="search">
                    <form>
                        <input type="search" value="" placeholder="Recherchez votre entreprise" />
                        <button type="submit" style="margin-bottom: 20px" class="btn btn-primary">Search</button>
                    </form>
                </div>
	            </div>
	          </div>
	        </div>
	        <div class="item">
                <img  src="web/img/test.jpg">
	          <div class="container">
	            <div class="carousel-caption offset4">
	              <div id="search">
                    <form>
                        <input type="search" value="" placeholder="Recherchez votre entreprise" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	            <img  src="web/img/test.jpg">
	          <div class="container">
	            <div class="carousel-caption offset4">
	              <div id="search">
                    <form>
                        <input type="search" value="" placeholder="Recherchez votre entreprise" />
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	      <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
	    </div>
<!-- /CAROUSEL -->

<!-- SERVICES & OFFRES -->
<section id="service">
        <div class="container marketing">
            <!-- marketing -->
          <div class="featurette">
            <img class="featurette-image pull-right img-circle" src="web/img/icones/Argent_Jaune.png">
            <h2 class="featurette-heading">Une plue-value pour l'entreprise<span class="muted">Description</span></h2>
            <p class="lead">explication</p>
          </div>
          <hr class="featurette-divider">
          <div class="featurette">
            <img class="featurette-image pull-left img-circle" src="web/img/icones/Stockage Supp_Jaune.png">
            <h2 class="featurette-heading">Une transparence pour vous<span class="muted">See for yourself.</span></h2>
            <p class="lead">explication</p>
          </div>
          <hr class="featurette-divider">
          <div class="featurette">
            <img class="featurette-image pull-right img-circle" src="web/img/icones/Assistance_Jaune.png">
            <h2 class="featurette-heading ">Une bdd de folie<span class="muted">Checkmate.</span></h2>
            <p class="lead">explication</p>
          </div>

        <hr class="featurette-divider">

    <!-- SERVICES -->
            <div class="row">
                <div class="span4">
                    <img class="img-circle" src="web/img/icones/BI_Jaune.png">
                    <h2>BI</h2>
                    <p>Nous récoltons, organisons et hébergeons vos données et nous vous les rendons accessibles de sorte à vous offrir un recul sur votre activité et
                        à vous aider à prendre vos décisions. Nous offrons également un service d’assistance sur toutes question technique que vous pourriez avoir.</p>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/icones/OpenData_Jaune.png">
                    <h2>Open Data</h2>
                    <p>Nous vous propulsons au-devant de la scène de l’Open Data ! Nous publions vos données sur notre plate-forme pour en permettre la réutilisation : vous
                        affichez ainsi votre transparence et avez une vision d’ensemble de voter activité mise en forme de manière lisible et intuitive.</p>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/icones/Premium_Jaune.png">
                    <h2>Prenium</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                </div>
            </div>
    <!-- /SERVICES -->

        <hr class="featurette-divider">

    <!-- OFFRES -->
            <table class="table table-striped table-bordered">
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
        </div>
       <!-- /OFFRES -->
<!-- /SERVICES & OFFRES -->
</section>

    <hr class="featurette-divider">

<!-- TEAM -->
<section id="team">
        <div class="container-full team">
            <div class="row  offset2">
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
            </div>
            <div class="row  offset2">
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
</section>
<!-- /TEAM -->

    <hr class="featurette-divider">

<!-- CONTACT -->
<section id="contact">
    <div class="container contact">
        <form class=" span8">
          <div class="row offset6">
                <div class="span3">
                    <label>First Name</label>
                    <input type="text" class="span3" placeholder="Your First Name">
                    <label>Last Name</label>
                    <input type="text" class="span3" placeholder="Your Last Name">
                    <label>Email Address</label>
                    <input type="text" class="span3" placeholder="Your email address">
                    <label>Subject
                    <select id="subject" name="subject" class="span3">
                        <option value="na" selected="">Choose One:</option>
                        <option value="service">General Customer Service</option>
                        <option value="suggestions">Suggestions</option>
                        <option value="product">Product Support</option>
                    </select>
                    </label>
                </div>
                <div class="span3">
                    <label>Message</label>
                    <textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Send</button>
            </div>
        </form>
    </div>
</section>
<!-- /CONTACT -->

<!-- /CONTAINER FULL-->
     </div>
<!-- FOOTER -->
      <footer>
          <center>
        <a href="#">Back to top</a>
        <p>© 2015 Data4All <a href="#">Privacy</a> · <a href="#">Terms</a></p>
          </center>
      </footer>
<!-- /FOOTER -->
</div>
<!-- /ACCUEIL -->
