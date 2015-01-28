<?php /* Smarty version Smarty-3.1.13, created on 2015-01-28 11:29:17
         compiled from "F:\wamp\www\D4A\version_smarty\templates\body\section_carrousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2015954b16415028352-45405456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ebede919cc62c94849d71d0dc7456026c849564' => 
    array (
      0 => 'F:\\wamp\\www\\D4A\\version_smarty\\templates\\body\\section_carrousel.tpl',
      1 => 1422443974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015954b16415028352-45405456',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b1641502a046_90274102',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b1641502a046_90274102')) {function content_54b1641502a046_90274102($_smarty_tpl) {?>
  <head>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

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

  </body>


<?php }} ?>