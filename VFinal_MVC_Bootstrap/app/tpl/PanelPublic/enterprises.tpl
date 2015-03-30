<div id="listeentreprise">
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
<!--/ MENU -->

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
                                    </form>
                                </form>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>

<!-- /Inscription -->

    <center>
        <div class="jumbotron well">
          <h1>Liste des entreprises qui nous font confiances</h1>
          <h4>Retrouvez toutes les informations sur les entreprises qui ont choisi notre solution.
              Si vous souhaitez également partager vos données n'hésitez pas à nous contacter.</h4>
          <p><a class="btn btn-primary btn-lg">En savoir plus</a></p>
        </div>
    </center>

<!-- Liste entreprise -->
    <br/>
    <div class="container offset5">
        <div class="row">
            <div id="content">
                <div class="span4 well">
                    <table class="table table-striped ">
                        <tbody>
                        <!-- Modifs pour afficher les entreprise présent dans la bdd -->
                        {section name=list loop=$listeEntreprise}
                                <td><B>{$listeEntreprise[list].nom_entreprise}</B></td>
                                <td><a href="index.php?page=entreprise&action=info&value={$listeEntreprise[list].id_entreprise}" class="btn btn-info">Info</a></td>
                                <td><a href="index.php?page=index&action=display_ent">Télécharger</a></td>
                            </tr>
                        {/section}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="offset3" id="page_navigation"> </div>
    </div>
<!-- /Liste entreprise -->
</div>

<!-- Pagination -->
<script>
    var show_per_page = 2;
    var current_page = 0;
    function set_display(first, last) {
        $('#content').children().css('display', 'none');
        $('#content').children().slice(first, last).css('display', 'block');
    }
    function previous(){
        if($('.active').prev('.page_link').length)
        go_to_page(current_page - 1);
    }
    function next(){

    if($('.active').next('.page_link').length)
        go_to_page(current_page + 1);
    }
    function go_to_page(page_num){
        current_page = page_num;
        start_from = current_page * show_per_page;
        end_on = start_from + show_per_page;
        set_display(start_from, end_on);
        $('.active').removeClass('active');
        $('#id' + page_num).addClass('active');
    }
    $(document).ready(function(){
        var number_of_pages = Math.ceil($('#content').children().size() /
        show_per_page);
        var nav = '<div class="pagination">'
        nav += '<ul>';
        nav += '<li class="previous_link">';
        nav += '<a href="javascript:previous();"><<</a>';
        nav += '';
        var i = -1;
        while(number_of_pages > ++i){
        nav += '<li class="page_link'
        if(!i) nav += ' active';
        nav += '" id="id' + i +'">';
        nav += '<a href="javascript:go_to_page(' + i +')">'+ (i + 1)
        +'</a>';
        nav += '';
        }
        nav += '<li class="next_link" >';
        nav += '<a href="javascript:next();">>></a>';
        nav += '';
        nav += '</ul>';
        nav += '</div>';
        $('#page_navigation').html(nav);
        set_display(0, show_per_page);
    });
</script>
<!-- Pagination -->