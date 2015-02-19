<div id="liste entreprise">

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
<!-- MENU -->

<!-- Titre -->
    <center>
        <div class="jumbotron well">
          <h1>Liste des entreprises qui nous font confiances</h1>
          <p>Ici une petite descriptions</p>
          <p><a class="btn btn-primary btn-lg">En savoir plus</a></p>
        </div>
    </center>
<!-- /Titre -->

<!-- Liste entreprise -->
    <div class="container-full">
        <div class="row">
            <div class=" span2 tabbable tabs-left">
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#Efrei" data-toggle="tab">Efrei</a></li>
            <li><a href="#Efrei2" data-toggle="tab">Efrei2</a></li>
            <li><a href="#Entreprise" data-toggle="tab">Entreprise</a></li>
        </ul>
    </div>
<!-- /Liste entreprise -->

<!-- DESCRIPTION_ENTREPRISES -->
    <div class="offset2">
        <div class="tab-content">
            <div class="tab-pane active" id="Efrei">
                <h2>
                    <span class="muted"> <a href="http://www.efrei.fr/ ">EFREI</a></span>
                    <a href="#" class="btn btn-warning modal-download"><i class="icon-white icon-download-alt"></i></a>
                </h2>
                <img src="web/img/offre.png" class="img-responsive img-centered" alt="">
                <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id eli</p>
                <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>

            <div class="tab-pane" id="Efrei2">
                <h2>
                    <span class="muted"> <a href="http://www.efrei.fr/ ">EFREI2</a></span>
                    <a href="#" class="btn btn-warning modal-download"><i class="icon-white icon-download-alt"></i></a>
                </h2>
                <img src="web/img/test.jpg" class="img-responsive img-centered" alt="">
                <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                <p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id eli</p>
                <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                <p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                <p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            </div>

            <div class="tab-pane" id="Entreprise">
                 <h2>
                    <span class="muted"> <a href="http://www.efrei.fr/ ">Entreprise</a></span>
                    <a href="#" class="btn btn-warning modal-download"><i class="icon-white icon-download-alt"></i></a>

                </h2>
            </div>
        </div>
    </div>
<!-- /DESCRIPTION_ENTREPRISES -->

<!-- Pagination -->
<div class="offset3" id="page_navigation"> </div> <!-- inactive pour le moment -->

<script>
    var show_per_page = 1;
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