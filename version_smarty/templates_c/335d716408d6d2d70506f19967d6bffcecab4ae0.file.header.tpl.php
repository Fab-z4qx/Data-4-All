<?php /* Smarty version Smarty-3.1.13, created on 2015-01-10 16:29:05
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22097866954b14541b82ed4-16191058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335d716408d6d2d70506f19967d6bffcecab4ae0' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/header.tpl',
      1 => 1420885503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22097866954b14541b82ed4-16191058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b14541c11489_00426216',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b14541c11489_00426216')) {function content_54b14541c11489_00426216($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
    <header>

    	<!-- Nav horizontal

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
		-->

		<!-- Nav vertical -->

		<aside>

			<center>
				<div class="logoVertical">
					<a  class="span_header_logoVertical" href="../index.php">
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if (($_tmp3=='index')){?><img id="logo_site_header" src="images/logo_site.png"> </a><?php }?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if (($_tmp4!='index')){?><img id="logo_site_header" src="../images/logo_site.png"> </a><?php }?>
				</div>
			</center>

			<nav>
				<ul>
					<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if (($_tmp5=='index')){?>
						<a class="span_headerVertical" href="htdocs/search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="htdocs/liste_entreprises.php"><li>Liste des entreprises</li></a>
						<a class="span_headerVertical" href="htdocs/login.php"><li>Connexion</li></a>
						<a class="span_headerVertical" href="htdocs/offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="htdocs/a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="htdocs/contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if (($_tmp6!='index')){?>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Liste des entreprises</li></a>
						<a class="span_headerVertical" href="login.php"><li>Connexion</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					<?php }?>
				</ul>
			</nav>

			<center>
				<div id="credit">
					Data4All ©
				</div>
			</center>

		</aside>

	</header>

	<div id="page">



		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp7=ob_get_clean();?><?php if (($_tmp7=='index')){?>
		<div id="navHorizontal">
			<div id="titrePage">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp8=ob_get_clean();?><?php if (($_tmp8=='index')){?> Accueil<?php }?>
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp12=ob_get_clean();?><?php if (($_tmp9=='search'||$_tmp10=='liste_entreprises'||$_tmp11=='a_propos'||$_tmp12=='login')){?>
		<div class="navHorizontalNonIndex">
			<div id="titrePage">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp13=ob_get_clean();?><?php if (($_tmp13=='search')){?> Recherche <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp14=ob_get_clean();?><?php if (($_tmp14=='liste_entreprises')){?> Liste des Entreprises  <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp15=ob_get_clean();?><?php if (($_tmp15=='a_propos')){?> A Propos <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp16=ob_get_clean();?><?php if (($_tmp16=='login')){?> Connexion <?php }?>
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp17=ob_get_clean();?><?php if (($_tmp17=='ouvrirDonnees')){?> 
		<div class="navHorizontalOuvrirDonnees">
			<div id="titrePage">
				Ouvrir ses Données 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp18=ob_get_clean();?><?php if (($_tmp18=='transparence')){?> 
		<div class="navHorizontalTransparence">
			<div id="titrePage">
				Transparence 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp19=ob_get_clean();?><?php if (($_tmp19=='gagnerCompetivite')){?> 
		<div class="navHorizontalGagnerCompetivite">
			<div id="titrePage">
				Gagner en Competivité 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp20=ob_get_clean();?><?php if (($_tmp20=='demarcheCitoyenne')){?> 
		<div class="navHorizontalDemarcheCitoyenne">
			<div id="titrePage">
				Demarche Citoyenne 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp21=ob_get_clean();?><?php if (($_tmp21=='contact')){?> 
		<div class="navHorizontalContact">
			<div id="titrePage">
				Contact 
			</div>
		</div>
		<?php }?>

		


<?php }} ?>