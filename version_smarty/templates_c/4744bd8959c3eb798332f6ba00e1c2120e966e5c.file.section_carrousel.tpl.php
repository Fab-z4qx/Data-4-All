<?php /* Smarty version Smarty-3.1.13, created on 2015-01-27 19:29:06
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_carrousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47999933454b14541c51e19-09494912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4744bd8959c3eb798332f6ba00e1c2120e966e5c' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/body/section_carrousel.tpl',
      1 => 1422383279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47999933454b14541c51e19-09494912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b14541c53381_38257073',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b14541c53381_38257073')) {function content_54b14541c53381_38257073($_smarty_tpl) {?><section id="carrousel">

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
	

</section>
<?php }} ?>