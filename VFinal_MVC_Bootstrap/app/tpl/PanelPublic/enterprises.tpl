<div id="liste entreprise">

    <!-- MENU -->
    <div class="navbar navbar-fixed-top navbar-inverse">
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
<!--/ MENU -->

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
                                <td><a href="http://www.linux-france.org/article/these/the_osd/fr-the_open_source_definition-4.html" class="btn btn-success">Télécharger</a></td>
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