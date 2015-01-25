<?php /* Smarty version Smarty-3.1.13, created on 2015-01-25 19:31:45
         compiled from "/opt/lampp/htdocs/Data4All/version_smarty/templates/body/section_contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55647083654c53691d71a96-49835771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e50e913e6abc40aed5c2ee301e4e817206cba43' => 
    array (
      0 => '/opt/lampp/htdocs/Data4All/version_smarty/templates/body/section_contact.tpl',
      1 => 1421777328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55647083654c53691d71a96-49835771',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54c53691d74bc5_82445576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c53691d74bc5_82445576')) {function content_54c53691d74bc5_82445576($_smarty_tpl) {?><section id="contact">
	<div class="sectionContact">
		

			<div class="titreSectionContact">Contact</div>

		
		<div class="formulaire_contact">
			<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_contact_home_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>








	</div>

	<div id="Gmap">
		<iframe id="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.6434946481468!2d2.363700000000005!3d48.788696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673e24e04a9c3%3A0xc55cb3e676f95321!2sEfrei!5e0!3m2!1sfr!2sfr!4v1417033586096"></iframe>
	</div>
	
	
</section>
<?php }} ?>