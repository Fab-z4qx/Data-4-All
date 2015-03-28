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
                <li class="page_active">
                    <a href="entreprise.php?page=homeEntreprise"><i class="fa fa-home"></i>&nbsp;&nbsp;Accueil</a>
                </li>
                <li>
                    <a href="entreprise.php?page=gestionFichiers"><i class="fa fa-cog"></i>&nbsp;&nbsp;Gestion des fichiers</a>
                </li>
                <li>
                    <a href="entreprise.php?page=visualisation"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Visualisation</a>
                </li>
                <li>
                    <a href="entreprise.php?page=compte"><i class="fa fa-user"></i>&nbsp;&nbsp;Compte</a>
                </li>
                <!--<li><a href="entreprise.php?page=services">Services</a></li>-->
                <li>
                    <div class="footer_slidebar">
                        © 2015 Data4All - contact
                    </div>
                </li>
            </ul>
        </div>
    </div>
        <!-- /#sidebar-wrapper -->
<!-- /MENU --> 
    <!-- ONGLETS TOP HORIZONTAL -->
    <nav class="navbar navbar-default navbar-fixed-top" id="nav_entreprise">
        <div class="container-full" >
            <div class="titre_page">
                <a class="brand" href="#"><i class="fa fa-home"></i>&nbsp;&nbsp;Accueil</a>
            </div>
            <div class="nav-collapse pull-right">
                <ul class="nav">
                    <li><a class="page-scroll" href="#statistiques"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;Statistiques</a></li>
                    <!--
                    <li><a class="page-scroll" href="#nb_fichiers"><i class="fa fa-file"></i>&nbsp;&nbsp;Nombres de fichiers</a></li>
                    <li><a class="page-scroll" href="#espace_dispo"><i class="fa fa-database"></i>&nbsp;&nbsp;Espace disponible</a></li>
                    <li><a class="page-scroll" href="#dernier_graph"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Dernier Graphique</a></li>
                    -->
                    <li><a href="index.php?page=connect&action=logout"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /ONGLETS TOP HORIZONTAL -->


    <!-- STATISTIQUES -->
    <section id="entreprise_contenu">
        <div class="container stat" style="background-color: white;box-shadow: 0 0 5px #888 inset;">
            <div class="row">
            <div class="span4" id="nb_file">
                <div class="circle circle-border">
                    <div class="circle-inner">
                        <div class="score-text">
                            {if isset($numberOfFile)}
                                {$numberOfFile}
                            {/if}
                        </div>
                    </div>
                </div>
                <h2><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;Nombre de Fichiers</h2>
            </div>

            <div class="span4" id="space">
                <div class="circle circle-border">
                    <div class="circle-inner">
                        <div class="score-text">
                            {if isset($space)}
                                {$space}
                            {/if}
                        </div>
                    </div>
                </div>
                <h2 ><i class="fa fa-database"></i>&nbsp;&nbsp;&nbsp;Espace Utilisé</h2>
            </div>

            <div class="span4" id="last_graph">
                <div class="circle circle-border">
                    <div class="circle-inner">
                        <div class="score-text">
                        SOME TEXT
                        </div>
                    </div>
                </div>
                <h2><i class="fa fa-clock-o"></i>&nbsp;&nbsp;Dernier Graphique</h2>
            </div>
        </div>
        </div>

        <div class="container">
            <center>
                <div id="moreSpace">
                    <h2>Besoin de plus d'espace de stockage</h2>
                    <button type="button" id="buttonMoreSpace" class="btn btn-lg">Obtenir</button>
                </div>
            </center>
        </div>

    </section>


<!--

    <!-- STATISTIQUES 
    <section id="entreprise_contenu">
        <div class="container stat" style="background-color: white;box-shadow: 0 0 5px #888 inset;">
            

            <div class="row">
                <h1 class="titre_section"><i class="fa fa-dashboard"></i>&nbsp;&nbsp;&nbsp;Statistiques</h1> <br>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>
                        {if isset($numberOfFile)}
                            {$numberOfFile}
                        {/if}
                    </h2>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>
                        {if isset($space)}
                            {$space}
                        {/if}
                    </h2>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Stat 3</h2>
                </div>
            </div>
    
            <hr class="featurette-divider">
    <!-- NOMBRES FICHIERS 
    <div id="nb_fichiers"></div>
            <div class="container stat">
                <div class="row">
                    <h1 class="titre_section"><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;Nombre de Fichiers</h1> <br>
                    <div class="span4">
                        
                        <h2>
                            {if isset($numberOfFile)}
                                {$numberOfFile}
                            {/if}
                        </h2>
                    </div>
                    <div class="span4">
                        <img class="img-circle" src="web/img/team/alain.jpg">
                        <h2>Stat 2</h2>
                    </div>
                    <div class="span4">
                        <img class="img-circle" src="web/img/team/alain.jpg">
                        <h2>Stat 3</h2>
                    </div>
                </div>
            </div>
    
            <hr class="featurette-divider">
    <!-- ESPACE DISPONIBLE 
             <div id="espace_dispo"></div>
            <div class="container stat">
                <div class="row">
                    <h1 class="titre_section"><i class="fa fa-database"></i>&nbsp;&nbsp;&nbsp;Espace Disponible</h1> <br>
                    <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Stat 1</h2>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Stat 2</h2>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Stat 3</h2>
                </div>
                </div>
            </div>
    
            <hr class="featurette-divider">
    <!-- DERNIER GRAPH 
            <div id="dernier_graph"></div>
            <div class="container stat">
                <div class="row">
                    <h1 class="titre_section"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Dernier Graphique</h1> <br>
                    <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Stat 1</h2>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Stat 2</h2>
                </div>
                <div class="span4">
                    <img class="img-circle" src="web/img/team/alain.jpg">
                    <h2>Stat 3</h2>
                </div>
                </div>
            </div>
        </div>
    </section>
    -->
</div>