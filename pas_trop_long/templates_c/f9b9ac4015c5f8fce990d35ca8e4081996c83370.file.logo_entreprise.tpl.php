<?php /* Smarty version Smarty-3.1.13, created on 2015-01-21 14:43:03
         compiled from "/opt/lampp/htdocs/Data4All/pas_trop_long/templates/index/logo_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164560581654beeaffe33ad1-56927522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9b9ac4015c5f8fce990d35ca8e4081996c83370' => 
    array (
      0 => '/opt/lampp/htdocs/Data4All/pas_trop_long/templates/index/logo_entreprise.tpl',
      1 => 1421847776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164560581654beeaffe33ad1-56927522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54beeaffe349d6_97752829',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54beeaffe349d6_97752829')) {function content_54beeaffe349d6_97752829($_smarty_tpl) {?><section id="logo_entreprise">

    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/simple.carousel.js"></script>
    
    <script type="text/javascript">
        jQuery(document).ready(function() {

            $("ul.caroussel1").simplecarousel({
                width:700,
                height:400,
                auto: 4000,
                pagination: false
            });
        });
        
    </script>

	<center>
	    <ul class="caroussel1">
		<li><img src="images/alain.jpg" /></li>
		<li><img src="images/etienne.jpg" /></li>
		<li><img src="images/guillaume.jpg" /></li>
		<li><img src="images/tim.png" /></li>
	    </ul>
	</center>

</section>
<?php }} ?>