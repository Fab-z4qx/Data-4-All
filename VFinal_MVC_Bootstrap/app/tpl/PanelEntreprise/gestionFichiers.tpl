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
                    <a href="entreprise.php?page=homeEntreprise"><i class="fa fa-home"></i>&nbsp;&nbsp;Accueil</a>
                </li>
                <li class="page_active">
                    <a href="entreprise.php?page=gestionFichiers"><i class="fa fa-cog"></i>&nbsp;&nbsp;Gestion des fichiers</a>
                </li>
                <li>
                    <a href="entreprise.php?page=visualisation"><i class="fa fa-desktop"></i>&nbsp;&nbsp;Visualisation</a>
                </li>
                <li>
                    <a href="entreprise.php?page=compte"><i class="fa fa-user"></i>&nbsp;&nbsp;Compte</a>
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
                <a class="brand" href="#"><i class="fa fa-cog"></i>&nbsp;&nbsp;Gestion des fichiers</a>
            </div>
            <div class="nav-collapse pull-right">
                <ul class="nav">
                    <li><a href="#upload" data-toggle="tab"><i class="fa fa-cloud-upload"></i>&nbsp;&nbsp;Upload</a></li>
                    <li><a href="#all_files" data-toggle="tab"><i class="fa fa-file"></i>&nbsp;&nbsp;Tout les fichiers</a></li>
                    <li><a href="index.php?page=connect&action=logout"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;og out</a></li>
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
                    
                        <h1 class="titre_section"><i class="fa fa-cloud-upload"></i>&nbsp;&nbsp;&nbsp;Upload</h1> <br>
                         <div class="contr"><h2>Vous pouvez selectionner une fichier à importer</h2></div>
                            <div class="upload_form_cont">
                                <form id="upload_form" enctype="multipart/form-data" method="post" action="htdocs/panel_entreprise/upload_file.php">
                                    <div>
                                        <div><label for="file">Selectionner un fichier à importer </label></div>
                                        <div><input type="file" name="file" id="file" onchange="fileSelected();" /></div>
                                    </div>
                                    <div>
                                        <input type="button" value="Upload" onclick="startUploading()" />
                                    </div>
                                    <div id="fileinfo">
                                        <div id="filename"></div>
                                        <div id="filesize"></div>
                                        <div id="filetype"></div>
                                        <div id="filedim"></div>
                                    </div>
                                    <div id="error">You should select valid image files only!</div>
                                    <div id="error2">An error occurred while uploading the file</div>
                                    <div id="abort">The upload has been canceled by the user or the browser dropped the connection</div>
                                    <div id="warnsize">Your file is very big. We can't accept it. Please select more small file</div>

                                    <div id="progress_info">
                                        <div id="progress"></div>
                                        <div id="progress_percent">&nbsp;</div>
                                        <div class="clear_both"></div>
                                        <div>
                                            <div id="speed">&nbsp;</div>
                                            <div id="remaining">&nbsp;</div>
                                            <div id="b_transfered">&nbsp;</div>
                                            <div class="clear_both"></div>
                                        </div>
                                        <div id="upload_response"></div>
                                    </div>
                                </form>
                                <img id="preview" />
                            </div>
                </div>
            </section>
        </div>
        <!-- /ONGLET UPLOAD -->
        <!-- ONGLET ALL FILES -->
        <div class="tab-pane" id="all_files">
              <section id="entreprise_contenu">
                <div class="container stat" style="background-color: white;box-shadow: 0 0 5px #888 inset;">
                        <h1 class="titre_section"><i class="fa fa-file"></i>&nbsp;&nbsp;&nbsp;Tout les fichiers</h1> <br>
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
                                <tr>
                                    <th>fichier 7</th>
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
                                    <th>fichier 8</th>
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
                                    <th>fichier 9</th>
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
                                    <th>fichier 10</th>
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
                                    <th>fichier 11</th>
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
                                    <th>fichier 12</th>
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
                                    <th>fichier 13</th>
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
                                    <th>fichier 14</th>
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
