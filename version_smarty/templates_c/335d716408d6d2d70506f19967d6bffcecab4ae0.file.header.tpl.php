<?php /* Smarty version Smarty-3.1.13, created on 2015-01-19 22:01:18
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22097866954b14541b82ed4-16191058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335d716408d6d2d70506f19967d6bffcecab4ae0' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/header.tpl',
      1 => 1421701277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22097866954b14541b82ed4-16191058',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54b14541c11489_00426216',
  'variables' => 
  array (
    'header' => 0,
    'admin_entreprise' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b14541c11489_00426216')) {function content_54b14541c11489_00426216($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
	
    <header>

		<aside>

			<center>
				<div class="logoVertical">
					<a  class="span_header_logoVertical" href="../index.php">
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (($_tmp1=='index')){?><img id="logo_site_header" src="images/logo_site_bord_gris.png"> </a><?php }?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if (($_tmp2!='index')){?><img id="logo_site_header" src="../images/logo_site_bord_gris.png"> </a><?php }?>
				</div>
			</center>

			<nav>
				<ul>
					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp3=ob_get_clean();?><?php if (($_tmp3=='index')){?>
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="htdocs/search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="htdocs/liste_entreprises.php"><li>Liste des entreprises</li></a>
						<a class="span_headerVertical" href="htdocs/login.php"><li>Connexion</li></a>
						<a class="span_headerVertical" href="htdocs/offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="htdocs/a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="htdocs/contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if (($_tmp4!='index'&&$_tmp5!='admin_entreprise')){?>
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Liste des entreprises</li></a>
						<a class="span_headerVertical" href="login.php"><li>Connexion</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if (($_tmp6=='admin_entreprise')){?>
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Accueil</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Importer Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
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
			<div id="navHorizontal_connexion">
				<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_connexion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>	
		<?php }?>


		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp9=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp11=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp12=ob_get_clean();?><?php if (($_tmp8=='search'||$_tmp9=='liste_entreprises'||$_tmp10=='a_propos'||$_tmp11=='login'||$_tmp12=='offres')){?>
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
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp17=ob_get_clean();?><?php if (($_tmp17=='offres')){?> Offres <?php }?>
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp18=ob_get_clean();?><?php if (($_tmp18=='admin_entreprise')){?>
		<div class="navHorizontal_admin_entreprise">
			<div id="titrePage">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp19=ob_get_clean();?><?php if (($_tmp19=='home_page')){?> Accueil - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp20=ob_get_clean();?><?php if (($_tmp20=='changer_offre')){?> Changer d'offre - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp21=ob_get_clean();?><?php if (($_tmp21=='stat_compte')){?> Statistique Compte - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp22=ob_get_clean();?><?php if (($_tmp22=='import_fichier')){?> Importer Fichiers - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp23=ob_get_clean();?><?php if (($_tmp23=='infos_compte')){?> Informations - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp24=ob_get_clean();?><?php if (($_tmp24=='visualisation')){?> Visualisation - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp25=ob_get_clean();?><?php if (($_tmp25=='contact')){?> Contact - Nom Entreprise <?php }?>
			</div>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp26=ob_get_clean();?><?php if (($_tmp26=='home_page')){?>
			<div id="bouton_deco">
				<a class="decon" href="htdocs/login.php">Déconnexion</a>
			</div>
			<?php }?>

		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp27=ob_get_clean();?><?php if (($_tmp27=='ouvrirDonnees')){?> 
		<div class="navHorizontalOuvrirDonnees">
			<div id="titrePage">
				Ouvrir ses Données 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp28=ob_get_clean();?><?php if (($_tmp28=='transparence')){?> 
		<div class="navHorizontalTransparence">
			<div id="titrePage">
				Transparence 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp29=ob_get_clean();?><?php if (($_tmp29=='gagnerCompetivite')){?> 
		<div class="navHorizontalGagnerCompetivite">
			<div id="titrePage">
				Gagner en Competivité 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp30=ob_get_clean();?><?php if (($_tmp30=='demarcheCitoyenne')){?> 
		<div class="navHorizontalDemarcheCitoyenne">
			<div id="titrePage">
				Demarche Citoyenne 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp31=ob_get_clean();?><?php if (($_tmp31=='contact')){?> 
		<div class="navHorizontalContact">
			<div id="titrePage">
				Contact 
			</div>
		</div>
		<?php }?>

<?php }} ?>