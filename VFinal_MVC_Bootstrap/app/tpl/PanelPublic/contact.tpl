<div id="contact">

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
                        <li><a class="page-scroll" href="index.php">Services & Offres</a></li>
                        <li><a class="page-scroll" href="index.php">Team</a></li>
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

<!-- contact -->
    <div id="main" class="span8 well">
		<h2>Contactez-Nous</h2>
		<br/>
		<h4>Veuillez saisir vos coordonées</h4>
		<h5>
			Nom<span style="color:#FF0000">*</span> <br/><input type="text" /> <br/>
			Prenom<span style="color:#FF0000">*</span> <br/><input type="text" /> <br/>
			e-mail<span style="color:#FF0000">*</span> <br/><input type="email" /> <br/>
			Société <br/><input type="text" /> <br/>
		</h5>
		<h4>Exprimez-vous</h4>
		<h5>Objet</h5>
		<select name="objet" id="objet">
            <option value="na" selected>Choisissez un objet</option>
            <option value="Questions">Informations/Questions</option>
            <option value="Service client">Service client</option>
            <option value="Suggestions">Suggestions</option>
            <option value="SupportProduit">Support produit</option>
		</select>

		<label for="themessage"><h5>Votre message</h5></label>
		<textarea name="themessage" id="themessage" class="input-xlarge span7" rows="10"></textarea>
		<br>
		<h6><span style="color:#FF0000">*Champs obligatoires</span></h6><br/>
		<input type="submit" value="Envoyer"/>
    </div>
<!-- /contact -->


</div>