<?php /* Smarty version Smarty-3.1.13, created on 2015-01-25 23:02:19
         compiled from "/opt/lampp/htdocs/Data4All/version_smarty/templates/body/section_carrousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176753538654c53691d56ac6-60682063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94d9465b6e780f44b72e6453c689795e0898f8b1' => 
    array (
      0 => '/opt/lampp/htdocs/Data4All/version_smarty/templates/body/section_carrousel.tpl',
      1 => 1422223337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176753538654c53691d56ac6-60682063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c53691d57409_20348691',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c53691d57409_20348691')) {function content_54c53691d57409_20348691($_smarty_tpl) {?><section id="carrousel">

	<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="js/simple.carousel.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function() {

			$("ul.caroussel1").simplecarousel({
				auto: 4000,
				pagination: false
			});
		});
	</script>

		<ul class="caroussel1">
			<li><img src="images/image2.png" /></li>
			<li><img src="images/image1.png" /></li>
			<li><img src="images/guillaume.jpg" /></li>
			<li><img src="images/tim.png" /></li>
		</ul>


</section><?php }} ?>