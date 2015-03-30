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
                <a class="brand " href="index.php"><img src="web/img/logos/logo_site_sans_bord_teal.png" class="img-responsive img-centered"></a>
                <li class="divider pull-right"></li>
                <a class="brand " href="index.php">DATA 4 ALL</a>
                <div class="nav-collapse pull-right">
                    <ul class="nav">
                        <li><a class="page-scroll" href="index.php?page=entreprise">Liste Entreprises</a></li>
                        <li><a class="page-scroll" href="#service">Services & Offres</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="index.php?page=index&action=display_c">Contact</a></li>
                        <li> <form class='textbox' action="index.php?page=connect&action=login" method="post">
                                 <input class="input" type="text" name="login" id="name&" placeholder="Username" />
                                 <input class="input" type="password" name="password" id="password" placeholder="Passsword" />
                                 <input class="btn-primary" type="submit" value="OK"/>
                                 <div class="checkbox">
                                     <label>
                                        <input type="checkbox"/><font color="#8080BC"> se souvenir de moi</font>
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
                            <div class="container">
                                <div class="stepwizard">
                                    <div class="stepwizard-row setup-panel">
                                        <div class="stepwizard-step">
                                            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                            <p>Etape 1</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                            <p>Etape 2</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                            <p>Etape 3</p>
                                        </div>
                                        <div class="stepwizard-step">
                                            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                            <p>Fin</p>
                                        </div>
                                    </div>
                                </div>

                                <form role="form" method="post" action="index.php?page=formulaire&action=createAccount" >
                                    <form method="post" action="index.php?page=formulaire&action=createAccount">
                                        <div class="row setup-content" id="step-1">
                                            <div class="col-xs-12">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form_entreprise" for="nom_entreprise">Nom entreprise :</label>
                                                        <input type="text" required="required" name="nom_entreprise" id="nom_entreprise"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form_entreprise" for="email_entreprise">Email :</label>
                                                        <input type="email_entreprise" required="required" name="email_entreprise" id="email_entreprise"/>
                                                    </div>
                                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Suivant</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-2">
                                            <div class="col-xs-12">
                                                <div class="col-md-12">
                                                    <div class="span4">
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="adresse">Adresse :</label>
                                                            <input type="text" required="required" name="adresse" id="adresse"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="adresse_complementaire">Adresse complémentaire :</label>
                                                            <input type="text" name="adresse_complementaire" id="adresse_complementaire"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="ville">Ville :</label>
                                                            <input type="text" name="ville" id="ville"/>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="code_postal">Code Postale :</label>
                                                            <input type="text" name="code_postal" id="code_postal"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="pays">Pays :</label>
                                                            <input type="text" name="pays" id="pays"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="tel_entreprise">Tel :</label>
                                                            <input type="text" name="tel_entreprise" id="tel_entreprise"/>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="fax_entrepirse">Fax :</label>
                                                            <input type="text" name="fax_entreprise" id="fax_entreprise"/>
                                                        </div>
                                                     </div>
                                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Suivant</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row setup-content" id="step-3">
                                            <div class="col-xs-12">
                                                <div class="col-md-12">
                                                    <div class="span4">
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="siret_entreprise">Numéro Siret :</label>
                                                            <input type="text" name="siret_entreprise" id="siret_entreprise"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="forme_juridique_entreprise">Forme juridique :</label>
                                                            <input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="activite_entreprise">Description de l'activité de l'entreprise :</label>
                                                            <textarea style="resize:none;" rows="1" cols="18" name="activite_entreprise" id="activite_entreprise"></textarea><br><br>
                                                        </div>
                                                    </div>
                                                    <div class="span4">
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="password">Mot de passe :</label>
                                                            <input type="password" required="required" name="password" id="password"/>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form_entreprise" for="password_confirmation">Confirmation du mot de passe :</label>
                                                            <input type="password" required="required" name="password_confirmation" id="password_confirmation"/>
                                                        </div>
                                                     </div>
                                                    <!-- <script type="text/javascript">
                                                                        $(document).ready(function() {
                                                                        $('#captcha2').html($('#captcha').clone(true,true));
                                                                        });
                                                    </script> -->
                                                    <div id="captcha2"></div>
                                                    <input class="bouton_submit" type="submit" value="Continuer">
                                                </div>
                                            </div>
                                        </div>
                                        {if ({$account} == 'compte_cree')}
                                        <div class="row setup-content" id="step-4">
                                            <div class="col-xs-12">
                                                <div class="col-md-12">
                                                        <center>
                                                            <div class="jumbotron well">
                                                              <h1>Félicitation !</h1>
                                                              <h4>Vous êtes maintenant inscrit, vous allez recevoir un mail de confirmation à l'adresse que vous nous avez indiqué.</h4>
                                                            </div>
                                                        </center>
                                                </div>
                                            </div>
                                        </div>
                                        {/if}
                                        {if ({$account} == 'login_error')}
                                        <div class="row setup-content" id="step-4">
                                            <div class="col-xs-12">
                                                <div class="col-md-12">
                                                        <center>
                                                            <div class="jumbotron well">
                                                              <h1>ERROR !</h1>
                                                              <h4></h4>
                                                            </div>
                                                        </center>
                                                </div>
                                            </div>
                                        </div>
                                        {/if}
                                    </form>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>

<!-- /Inscription -->

<!-- CONTAINER FULL -->

<div class="container-full">

<!-- CAROUSEL -->
         <div id="myCarousel" class="carousel slide">
	      <div class="carousel-inner">
	        <div class="item active">
	          <img  src="web/img/Image_Carrousel_4.png">
	          <div class="container">
	            <div class="carousel-caption offset4">
	              <div id="search">
                    <form action="index.php?page=entreprise&action=search" method="post">
                        <input type="search" value="" placeholder="Recherchez votre entreprise" name="nom" id="nom" />
                        <button type="submit" style="margin-bottom: 20px" class="btn btn-primary" >Search</button>
                    </form>
                </div>
	            </div>
	          </div>
	        </div>
	        <div class="item">
                <img  src="web/img/Image_Carrousel_3.jpg">
	          <div class="container">
	            <div class="carousel-caption offset4">
	              <div id="search">
                    <form action="index.php?page=entreprise&action=search" method="post">
                        <input type="search" value="" placeholder="Recherchez votre entreprise" name="nom" id="nom" />
                        <button type="submit" style="margin-bottom: 20px" class="btn btn-primary" >Search</button>
                    </form>
                </div>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	            <img  src="web/img/Image_Carrousel_5.png">
	          <div class="container">
	            <div class="carousel-caption offset4">
	              <div id="search">
                    <form action="index.php?page=entreprise&action=search" method="post">
                        <input type="search" value="" placeholder="Recherchez votre entreprise" name="nom" id="nom" />
                        <button type="submit" style="margin-bottom: 20px" class="btn btn-primary" >Search</button>
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
            <img class="featurette-image pull-left img-circle" src="web/img/icones/Argent_Jaune.png">
            <h2 class="featurette-heading pull-left ">Une plue-value pour l'entreprise</h2></br></br></br></br>
            <p class="lead">Les données d’une entreprise sont nombreuses et il serait de dommage de ne
                    pas tiré profit de cette source pour votre entreprise. Grâce à notre solution, prenez la bonne décision au bon moment, en ayant les bonnes informations.
                    Prévoyez l’avenir en prenant les décisions correspondant à votre plan longue durée.</p>
          </div>
          <hr class="featurette-divider">
          <div class="featurette">
            <img class="featurette-image pull-right img-circle" src="web/img/icones/Stockage Supp_Jaune.png">
            <h2 class="featurette-heading pull-right">Une transparence pour vous</h2></br></br></br></br>
            <p class="lead">Vous avez de nombreuse donnée, et vous souhaitez les mettre à disposition de tous pour :
                <li>Montrer que vous n’avez rien a caché</li>
                <li>Permettez a chacun de faire de la recherche pour votre entreprise</li>
                <li>Stimulez l’économie</li>
            </p>
          </div>
          <hr class="featurette-divider">
          <div class="featurette">
            <img class="featurette-image pull-left img-circle" src="web/img/icones/Assistance_Jaune.png">
            <h2 class="featurette-heading pull-left">Une bdd de folie</h2></br></br></br></br>
            <p class="lead">Chargez vos données, exploitez vos données, et choisissez celle que vous voulez diffuser au monde. Stimulez l'économie et affichez votre transparence
                d’une main, récupérez les informations et prenez les décisions de l’autre. </p>
          </div>
        <hr class="featurette-divider">
    <!-- SERVICES -->
           <center> <h2 class="featurette-heading center">Choisissez l'offre qui vous correspond le mieux !</h2></center></br>
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
                    <p>L’offre premium comprend l’offre BI ainsi que que l’offre Open DATA. En choisissant cette offre vous propulserez votre entreprise sur les devants de
                        la scène grâce à l’Open Data, tout en ayant un service d’aide à la décision performant.</p>
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
                        <th><h2>Premium</h2></th>
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
    <center>
        <div id="test" class="jumbotron well">
          <h2>Nous vous présentons notre super équipe !</h2>
        </div>
    </center>


        <div class="container-full team">
            <div class="row  offset2">
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/benjamin.jpg">
                    <span class="muted"><h3>BOURGEAUX</h3><h3> Benjamin</h3></span>
                    <p>Leader</p>
                    <p>Ton idée est passionante mais...</p>
                    <p>C'est qui le patron ici ?!!</p>
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
                        <a class="btn btn-social-icon btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/thomas.jpg">
                    <span class="muted"><h3>De CHAMPS</h3><h3>Thomas</h3></span>
                    <p>Designer</p>
                    <p>Ron...zZZz..ron..zZZ..ron?</p>
                    <p>Ça a commencé ?</p>
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
                        <a class="btn btn-social-icon btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/etienne.jpg">
                    <span class="muted"><h3>DERBISE</h3><h3>Etienne</h3></span>
                    <p>Marketing</p>
                    <p>Putain! Où sont mes Sneakers!?</p>
                    <p>Bon Chance !</p>
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
                        <a class="btn btn-social-icon btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/alexis.jpg">
                    <span class="muted"><h3>COSTA</h3><h3>Alexis</h3></span>
                    <p>Marketing</p>
                    <p>Toujours à faire des blagues</p>
                    <p>N'aime pas perdre son temps!</p>
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
                        <a class="btn btn-social-icon btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row  offset2">
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/fabien.jpg">
                    <span class="muted"><h3>GENET</h3><h3>Fabien</h3></span>
                    <p>Developer</p>
                    <p>Tu peux me joindre</p>
                    <p>au 06...</p>
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
                        <a class="btn btn-social-icon btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/guillaume.jpg">
                    <span class="muted"><h3>PIGAUX</h3><h3>Guillaume</h3></span>
                    <p>Developer</p>
                    <p>Petit Ecureuil</p>
                    <p>actuellement en hibernation.</p>
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
                        <a class="btn btn-social-icon btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/tim.png">
                    <span class="muted"><h3>ROBERT</h3><h3>Timothée</h3></span>
                    <p>Developer</p>
                    <p>Développeur passionné</p>
                    <p>pas forcément passionnant!</p>
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
                        <a class="btn btn-social-icon btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="span3 well">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <span class="muted"><h3>SRIPATHMANATHAN</h3><h3>Alain</h3></span>
                    <p>Developer</p>
                    <p>Grand et Blond</p>
                    <p>L'avenir c'est moi !</p>
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
                        <a class="btn btn-social-icon btn-google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- /TEAM -->

     <hr class="featurette-divider">

<!-- /CONTAINER FULL-->
     </div>
<!-- FOOTER -->

      <footer>
          <center>
        <a href="#">Retour au début</a>
        <p>© 2015 Data4All · <a href="index.php?page=index&action=display_c">Contact</a> · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
          </center>
      </footer>
<!-- /FOOTER -->
</div>

<!-- SCRIPT_Inscription -->
<script>
$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});</script>
<!-- /SCRIPT_Inscription -->

<!-- /ACCUEIL -->