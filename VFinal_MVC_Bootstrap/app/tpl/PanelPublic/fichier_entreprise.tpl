<div id="fichier_ent">
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
                                        <input type="checkbox"/> se souvenir de moi
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


    <h1>fichiers telecharger entreprise</h1>

</div>