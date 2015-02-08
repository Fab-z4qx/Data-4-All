<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>D4A</title>

    <!-- LES STYLES -->
    <link href="web/Bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="web/Bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="web/Bootstrap/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="web/Bootstrap/bootstrap-responsive.css" rel="stylesheet">
    <link href="web/css/accueil.css" rel="stylesheet" type="text/css">
    
     <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- LES JS -->

</head>
<body>
    <!-- MENU -->
    <div class="navbar navbar-fixed-top navbar-inverse">
        <div class="navbar-inner">
            <div class="container-full">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
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
                        <fieldset class="textbox">
    		                 <input type="text" placeholder="Username" />
    		                 <input type="password" placeholder="Passsword" />
    		                 <input type="submit" class="btn-primary" name="commit" value="Log In" />
    		            </fieldset>
                </div>
            </div>
        </div>
    </div>
    <!-- /MENU -->
    <div class="container-full">
        <!-- BARRE DE RECHERCHE -->
        <div class="box">
            <div class="col-xs-12">
                <form class="navbar-form navbar-left" role="search">
                        <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <!-- /BARRE DE RECHERCHE -->
        <!-- SERVICES & OFFRES -->
        <div class="box" id="service">

        </div>
        <!-- /SERVICES & OFFRES -->
        <!-- TEAM -->
        <div class="box" id="team">

        </div>
        <!-- /A PROPOS -->
        <!-- CONTACT -->
        <div class="box" id="contact">

        </div>
        <!-- /CONTACT -->
    </div>
    <!-- /CONTAINER -->

