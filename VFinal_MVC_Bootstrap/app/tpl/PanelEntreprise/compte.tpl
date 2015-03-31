<div class="body_entreprise">
<!-- MENU -->
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <div>
                <li class="sidebar-brand">
                    <a href="index.php?">
                        <img src="web/img/logos/Logo_D4A_Teal_Bords.png">
                    </a>
                </li>
                </div>
                <li>
                    <a href="entreprise.php?page=homeEntreprise"><i class="fa fa-home"></i>&nbsp;&nbsp;Accueil</a>
                </li>
                <li>
                    <a href="entreprise.php?page=gestionFichiers"><i class="fa fa-cog"></i>&nbsp;&nbsp;Gestion des fichiers</a>
                </li>
                <li>
                    <a href="entreprise.php?page=visualisation"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Visualisation</a>
                </li>
                <li class="page_active">
                    <a href="entreprise.php?page=compte"><i class="fa fa-user"></i>&nbsp;&nbsp;Compte</a>
                </li>
                <li>
                    <div class="footer_slidebar">
                        © 2015 Data4All - contact
                    </div>
                </li>
                <!--<li><a href="entreprise.php?page=services">Services</a></li>-->
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
    <!-- /MENU -->
    <nav class="navbar navbar-default navbar-fixed-top" id="nav_entreprise">
        <div class="container-full" >
            <div class="titre_page">
                <a class="brand" href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Gestion du Compte</a>
            </div>
            <div class="nav-collapse pull-right">
                <ul class="nav">
                    <li><a href="index.php?page=connect&action=logout"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;log out</a></li>
                </ul>
            </div>
        </div>
    </nav>



<section id="entreprise_contenu_compte">

    <div id="group_form_contact" class="container stat">

            <h1 class="titre_section"><i class="fa fa-refresh"></i>&nbsp;&nbsp;&nbsp;Gardez à jour votre profil</h1> <br>

    <div class="span4">
        <form method="post" action="index.php?page=formulaire&action=createAccount">

            <div class="group_form" class="col-xs-6">
                
                    <div class="form-group">
                        <label class="form_entreprise" for="nom_entreprise">Nom entreprise :</label>
                        <input type="text" required="required" name="nom_entreprise" id="nom_entreprise"  value="{$nom_entreprise}"/>
                    </div>
                    <div class="form-group">
                        <label class="form_entreprise" for="email_entreprise">Email :</label>
                        <input type="email_entreprise" required="required" name="email_entreprise" id="email_entreprise" value="{$email_entreprise}"/>
                    </div>
            </div>
            <div class="group_form" class="col-xs-6">
                        <div class="form-group">
                            <label class="form_entreprise" for="tel_entreprise">Tel :</label>
                            <input type="text" name="tel_entreprise" id="tel_entreprise" value="{$tel_entreprise}"/>
                        </div>
                    
                        <div class="form-group">
                            <label class="form_entreprise" for="fax_entrepirse">Fax :</label>
                            <input type="text" name="fax_entreprise" id="fax_entreprise" value="{$fax_entreprise}"/>
                        </div>
                        <div class="form-group">
                            <label class="form_entreprise" for="siret_entreprise">Numéro Siret :</label>
                            <input type="text" name="siret_entreprise" id="siret_entreprise" value="{$siret_entreprise}"/>
                        </div>
                        <div class="form-group">
                            <label class="form_entreprise" for="forme_juridique_entreprise">Forme juridique :</label>
                            <input type="text" name="forme_juridique_entreprise" id="forme_juridique_entreprise" value="{$forme_juridique_entreprise}"/>
                        </div>
                </div>
            <div class="group_form" class="col-xs-6">
                        <div class="form-group">
                            <label class="form_entreprise" for="type_offre">Type d'offre :</label>
                            <input type="text" name="type_offre" id="type_offre" value="{$type_offre}"/>
                        </div>
            </div>
            
                    <input class="bouton_submit" type="submit" value="Sauvegarder les modifications">
        </form>
    </div>
    <div class="span4">
        <form method="post" action="index.php?page=formulaire&action=createAccount">

            <div class="group_form" class="col-xs-6">
                        <div class="form-group">
                            <label class="form_entreprise" for="adresse">Adresse :</label>
                            <input type="text" required="required" name="adresse" id="adresse" value="{$adresse}"/>
                        </div>
                        <div class="form-group">
                            <label class="form_entreprise" for="adresse_complementaire">Adresse complémentaire :</label>
                            <input type="text" name="adresse_complementaire" id="adresse_complementaire" value="{$adresse_complementaire}"/>
                        </div>
                        <div class="form-group">
                            <label class="form_entreprise" for="ville">Ville :</label>
                            <input type="text" name="ville" id="ville" value="{$ville}"/>
                        </div>
                    
                        <div class="form-group">
                            <label class="form_entreprise" for="code_postal">Code Postale :</label>
                            <input type="text" name="code_postal" id="code_postal" value="{$code_postal}"/>
                        </div>
                        <div class="form-group">
                            <label class="form_entreprise" for="pays">Pays :</label>
                            <input type="text" name="pays" id="pays" value="{$pays}"/>
                        </div>
                </div>
            
            
                    <input class="bouton_submit" type="submit" value="Sauvegarder les modifications">
        </form>
    </div>
    </div>
</section>

</div>