<div id="contact">

    <!-- MENU -->
    <div class="navbar navbar-static-top navbar-inverse">
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
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /MENU -->
<!-- contact -->
		<h2>Contactez-Nous</h2>
		<br/>
		<h4>Veuillez saisir vos coordonées</h4>
		<h5>
			Nom<span style="color:#FF0000">*</span> <br/><input type="text" /> <br/>
			Prenom<span style="color:#FF0000">*</span> <br/><input type="text" /> <br/>
			e-mail<span style="color:#FF0000">*</span> <br/><input type="email" /> <br/>
			Société <br/><input type="text" /> <br/><br/>
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
		<br><br>
		<h6><span style="color:#FF0000">*Champs obligatoires</span></h6><br/>
		<input type="submit" value="Envoyer"/>
<!-- /contact -->
</div>