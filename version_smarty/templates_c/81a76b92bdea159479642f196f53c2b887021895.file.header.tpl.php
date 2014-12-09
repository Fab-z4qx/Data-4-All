<?php /* Smarty version Smarty-3.1.13, created on 2014-11-30 02:09:15
         compiled from "/Users/Timohee/Desktop/data4all_vT/version_smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181085661547a6d46277ec1-86566013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81a76b92bdea159479642f196f53c2b887021895' => 
    array (
      0 => '/Users/Timohee/Desktop/data4all_vT/version_smarty/templates/header.tpl',
      1 => 1417309750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181085661547a6d46277ec1-86566013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547a6d4627b520_35969156',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547a6d4627b520_35969156')) {function content_547a6d4627b520_35969156($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
    <header>
		<div class="logo">
				<a  class="span_header_logo" href="index.tpl">
					Data 4 All (logo)
					<!--<img id="logoImage" src="images/logo.png"/>-->
				</a>

		</div>
		
		<nav>
			<ul>
				<li><a class="span_header" href="#search"> Recherche </a></li>
				<li><a class="span_header" href="htdocs/liste_entreprises.php"> Liste des entreprises </a></li>
				<li><a class="span_header" href="htdocs/login.php"> Se Connecter </a></li>
				<li><a class="span_header" href="htdocs/A_propos.php"> A Propos </a></li>
				<li><a class="span_header" href="#contact"> Contact </a></li>
			</ul>
		</nav>
	</header>
<?php }} ?>