<?php /* Smarty version Smarty-3.1.13, created on 2014-11-30 23:45:22
         compiled from "/Users/Timohee/Desktop/version_smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:808607881547b11520043b0-72249397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '933a7b14a7d38994025c049d9c28f453c7dc9c40' => 
    array (
      0 => '/Users/Timohee/Desktop/version_smarty/templates/header.tpl',
      1 => 1417387517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '808607881547b11520043b0-72249397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547b11520085c1_06475742',
  'variables' => 
  array (
    'header' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b11520085c1_06475742')) {function content_547b11520085c1_06475742($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
    <header>
		<div class="logo">
				<a  class="span_header_logo" href="../index.php"> Data 4 All (logo) </a>
		</div>


		
		<nav>
			<ul>
				<li><a class="span_header" href="../index.php"> Accueil </a></li>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1=='index')){?>
					<li><a class="span_header" href="htdocs/search.php"> Recherche </a></li>
					<li><a class="span_header" href="htdocs/liste_entreprises.php"> Liste des entreprises </a></li>
					<li><a class="span_header" href="htdocs/login.php"> Se Connecter </a></li>
					<li><a class="span_header" href="htdocs/a_propos.php"> A Propos </a></li>
					<li><a class="span_header" href="htdocs/contact.php"> Contact </a></li>
				<?php }?>

				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if (($_tmp2!='index')){?>
					<li><a class="span_header" href="search.php"> Recherche </a></li>
					<li><a class="span_header" href="liste_entreprises.php"> Liste des entreprises </a></li>
					<li><a class="span_header" href="login.php"> Se Connecter </a></li>
					<li><a class="span_header" href="a_propos.php"> A Propos </a></li>
					<li><a class="span_header" href="contact.php"> Contact </a></li>
				<?php }?>
			</ul>
		</nav>



	</header>
<?php }} ?>