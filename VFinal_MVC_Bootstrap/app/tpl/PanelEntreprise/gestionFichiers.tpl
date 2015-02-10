<div class="body_entreprise">
<!-- MENU -->
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <div>
                <li class="sidebar-brand">
                    <a href="index.php?">
                        <img src="web/img/logos_entreprises/efrei.png">
                    </a>
                </li>
                </div>
                <li>
                    <a href="entreprise.php?page=homeEntreprise"><i class="fa fa-home"></i> Accueil</a>
                </li>
                <li class="page_active">
                    <a href="entreprise.php?page=gestionFichiers"><i class="fa fa-cog"></i> Gestion des fichiers</a>
                </li>
                <li>
                    <a href="entreprise.php?page=visualisation"><i class="fa fa-desktop"></i> Visualisation</a>
                </li>
                <li>
                    <a href="entreprise.php?page=compte"><i class="fa fa-user"></i> Compte</a>
                </li>
                <!--<li><a href="entreprise.php?page=services">Services</a></li>-->
            </ul>
        </div>
    </div>
        <!-- /#sidebar-wrapper -->
<!-- /MENU -->
    <!-- ONGLETS TOP HORIZONTAL -->
<div class="modal-body">
    <nav class="navbar navbar-default navbar-fixed-top" id="nav_entreprise">
        <div class="container-full" >
            <div class="titre_page">
                <a class="brand" href="#">Gestion des fichiers</a>
            </div>
            <div class="nav-collapse pull-right">
                <ul class="nav">
                    <li><a href="#upload" data-toggle="tab">Chargement</a></li>
                    <li><a href="#all_files" data-toggle="tab">Tout les fichiers</a></li>
                    <li><a href="index.php?page=connect&action=logout"><i class="fa fa-sign-out"></i> log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /ONGLETS TOP HORIZONTAL -->

    <div id="TabModalContent" class="tab-content">
        <!-- ONGLET UPLOAD -->
        <div class="tab-pane active" id="upload">
            <section id="entreprise_contenu">
                <div class="container stat" style="background-color: white;box-shadow: 0 0 5px #888 inset;">
                    
                        <h1 class="titre_section">Chargement</h1> <br>
                        
                    
                </div>
            </section>
        </div>
        <!-- /ONGLET UPLOAD -->
        <!-- ONGLET ALL FILES -->
        <div class="tab-pane" id="all_files">
              <section id="entreprise_contenu">
                <div class="container stat" style="background-color: white;box-shadow: 0 0 5px #888 inset;">
                        <h1 class="titre_section">Tout les fichiers</h1> <br>
                        <table class="table table-striped ">
                            <tbody>
                                <tr>
                                    <th>fichier 1</th>
                                    <th>20ko</th>
                                    <th>10/02/2015</th>
                                    <div class="btn-group" role="group">
                                        <th><button type="button" class="btn btn-primary">visualiser</button></th>
                                        <th><button type="button" class="btn btn-info">renommer</button></th>
                                        <th><button type="button" class="btn btn-warning">téléchargement</button></th>
                                        <th><button type="button" class="btn btn-danger">supprimer</button></th>
                                    </div>
                                </tr>
                                <tr>
                                    <th>fichier 2</th>
                                    <th>20ko</th>
                                    <th>10/02/2015</th>
                                    <div class="btn-group" role="group">
                                        <th><button type="button" class="btn btn-primary">visualiser</button></th>
                                        <th><button type="button" class="btn btn-info">renommer</button></th>
                                        <th><button type="button" class="btn btn-warning">téléchargement</button></th>
                                        <th><button type="button" class="btn btn-danger">supprimer</button></th>
                                    </div>
                                </tr>
                                <tr>
                                    <th>fichier 3</th>
                                    <th>20ko</th>
                                    <th>10/02/2015</th>
                                    <div class="btn-group" role="group">
                                        <th><button type="button" class="btn btn-primary">visualiser</button></th>
                                        <th><button type="button" class="btn btn-info">renommer</button></th>
                                        <th><button type="button" class="btn btn-warning">téléchargement</button></th>
                                        <th><button type="button" class="btn btn-danger">supprimer</button></th>
                                    </div>
                                </tr>
                                <tr>
                                    <th>fichier 4</th>
                                    <th>20ko</th>
                                    <th>10/02/2015</th>
                                    <div class="btn-group" role="group">
                                        <th><button type="button" class="btn btn-primary">visualiser</button></th>
                                        <th><button type="button" class="btn btn-info">renommer</button></th>
                                        <th><button type="button" class="btn btn-warning">téléchargement</button></th>
                                        <th><button type="button" class="btn btn-danger">supprimer</button></th>
                                    </div>
                                </tr>
                                <tr>
                                    <th>fichier 5</th>
                                    <th>20ko</th>
                                    <th>10/02/2015</th>
                                    <div class="btn-group" role="group">
                                        <th><button type="button" class="btn btn-primary">visualiser</button></th>
                                        <th><button type="button" class="btn btn-info">renommer</button></th>
                                        <th><button type="button" class="btn btn-warning">téléchargement</button></th>
                                        <th><button type="button" class="btn btn-danger">supprimer</button></th>
                                    </div>
                                </tr>
                                <tr>
                                    <th>fichier 6</th>
                                    <th>20ko</th>
                                    <th>10/02/2015</th>
                                    <div class="btn-group" role="group">
                                        <th><button type="button" class="btn btn-primary">visualiser</button></th>
                                        <th><button type="button" class="btn btn-info">renommer</button></th>
                                        <th><button type="button" class="btn btn-warning">téléchargement</button></th>
                                        <th><button type="button" class="btn btn-danger">supprimer</button></th>
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </section>
        </div>
        <!-- /ONGLET ALL FILES -->
    </div> 
</div>
