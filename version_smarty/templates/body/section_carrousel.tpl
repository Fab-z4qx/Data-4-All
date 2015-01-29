<!-- section_carrousel -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


	<div id="myCarousel" class="carousel slide" data-interval="2000">
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/guillaume.jpg" />
			</div>
			<div class="item">
				<img src="images/image1.png" />
			</div>
			<div class="item">
				<img src="images/tim.png" />
			</div>
		</div>
		<div class="carousel-caption">
			<div id="row_search">
				<form class="form-wrapper cf">
       				<input type="text" placeholder="Nom, Siret" required>
        			<button type="submit">Search</button>
    			</form>
			</div>
		</div>
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<!-- script pour gérer le carousel -->
  <script type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel();
    });
  </script>
<!-- section_carrousel -->



