<?php /* Smarty version Smarty-3.1.13, created on 2015-01-21 15:34:34
         compiled from "/Users/Timohee/Desktop/Data4All/pas_trop_long/templates/index/logo_entreprise.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126157416654be96f9a018e0-95695181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45c31bdbedfe5731ad35fba4d9dcd252c3a1b6df' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/pas_trop_long/templates/index/logo_entreprise.tpl',
      1 => 1421850709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126157416654be96f9a018e0-95695181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54be96f9a01f37_52796037',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be96f9a01f37_52796037')) {function content_54be96f9a01f37_52796037($_smarty_tpl) {?><section id="logo_entreprise">

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