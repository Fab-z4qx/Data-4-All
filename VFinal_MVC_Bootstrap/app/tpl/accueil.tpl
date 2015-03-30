<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
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
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <img alt="Brand" style="margin-top: 5px" src="web/img/logos/logo_site_sans_bord_teal.png" class="img-responsive img-centered" alt="">
                <li class="divider pull-right"></li>
                <a class="brand" href="#">DATA 4 ALL</a>
                <div class="nav-collapse pull-right">
                    <ul class="nav">
                        <li><a class="page-scroll" href="#entreprise">Liste Entreprises</a></li>
                        <li><a class="page-scroll" href="#service">Services & Offres</a></li>
                        <li><a class="page-scroll" href="#team">Team</a></li>
                        <li><a class="page-scroll" href="#contact">Contact</a></li>
                        <fieldset class='textbox' style="padding:10px">
    		                 <input style="margin-top: " type="text" placeholder="Username" />
    		                 <input style="margin-top: " type="password" placeholder="Passsword" />
    		                 <a href="app/tpl/home.tpl"><input style="margin-bottom: 10px"class="btn-primary" name="commit"  type="submit" value="Log In" />
                            </a><div class="checkbox">
                                <label>
                                  <input type="checkbox"> Remember me
                                  <a class="pull-right" href="#">mot de passe oublié</a>
                                </label>
                            </div>
    		            </fieldset>
                </div>
            </div>
        </div>
    </div>
    <!-- /MENU -->

    <div class="container">


        <!-- BARRE DE RECHERCHE -->
        <div class="row">
            <div class="col-xs-12">
                <form class="navbar-form navbar-left" role="search">
                        <input type="text" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <!-- /BARRE DE RECHERCHE -->

        <!-- SERVICES & OFFRES -->
<section id="services">

    <div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
       <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <h2>D4A BI</h2>
                <div class="carousel-caption">
                  <h3>First slide label</h3>
                  <p>Description</p>
                </div>
            </div>
            <div class="item">
                <h2>D4A Open Data</h2>
                <div class="carousel-caption">
                  <h3>Second slide label</h3>
                  <p>Ddescription</p>
                </div>
            </div>
            <div class="item">
                <h2>D4A Prenium</h2>
                <div class="carousel-caption">
                  <h3>Third slide label</h3>
                  <p>Description 1</p>
                </div>
            </div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>

    <hr class="featurette-divider">

<!-- Three columns of text below the carousel -->
      <div class="row text-center">
        <div class="span4">
          <img class="img-circle" data-src="web/img/team/guillaume.jpg">
          <h2>BI</h2></br>
          <p>Description</p>
        </div>
        <div class="span4">
          <img class="img-circle" data-src="http://placehold.it/140/">
          <h2>Open Data</h2></br>
          <p>Descrption</p>
        </div>
        <div class="span4">
          <img class="img-circle" data-src="http://placehold.it/140/">
          <h2>Prenium</h2></br>
          <p>Description</p>
        </div>
      </div>

    <hr class="featurette-divider">

    <table class="table table-striped ">
        <tbody>
        <tr>
            <th></th>
            <th><h4>D4A BI</h4></th>
            <th><h4>D4A Open Data</h4></th>
            <th><h4>D4A Prenium</h4></th>
        </tr>
        <tr>
            <td><h4>Prix de base</h4></td>
            <td>2700/mois</td>
            <td>1600/mois</td>
            <td>3500/mois</td>
        </tr>
        <tr>
            <td><h4>Assistance & Mise en service</h4></td>
            <td>YEP !</td>
            <td>Nop !</td>
            <td>YEP !</td>
        </tr>
        <tr>
            <td><h4>Stockage de base</h4></td>
            <td>10Mo = 300€/mois</td>
            <td>1Mo = 30€/mois</td>
            <td>1Mo = 30€/mois</td>
        </tr>
        <tr>
            <td><h4>Stockage suplémentaire</h4></td>
            <td>10Mo = 300€/mois</td>
            <td>10Mo = 250€/mois</td>
            <td>10Mo = 250€/mois</td>
        </tr>
        <tr>
            <td><h4>Assistance 24/7</h4></td>
            <td>YEP !</td>
            <td>Nop !</td>
            <td>YEP !</td>
        </tr>
        </tbody>
    </table>
</section>

 <hr class="featurette-divider">

        <!-- A PROPOS -->
        
        <!-- CONTACT -->


     <!-- /CONTAINER -->

</body>
</html>