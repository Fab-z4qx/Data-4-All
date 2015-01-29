<?php /* Smarty version Smarty-3.1.13, created on 2015-01-29 16:13:06
         compiled from "/Users/Timohee/Desktop/Data4All/version_smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15712334854ca4e02dee303-30386703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '335d716408d6d2d70506f19967d6bffcecab4ae0' => 
    array (
      0 => '/Users/Timohee/Desktop/Data4All/version_smarty/templates/header.tpl',
      1 => 1422467056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15712334854ca4e02dee303-30386703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'admin_entreprise' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_54ca4e02ef7dd9_97666648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ca4e02ef7dd9_97666648')) {function content_54ca4e02ef7dd9_97666648($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<<?php ?>?php require("common.inc.php"); ?<?php ?>>
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
						<a class="span_headerVertical" href="htdocs/liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="htdocs/offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="htdocs/login.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="htdocs/a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="htdocs/contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if (($_tmp4=='search')){?>
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li class="li_select">Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="login.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if (($_tmp5=='liste_entreprises')){?>
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li class="li_select">Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="login.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if (($_tmp6=='offres')){?>
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li class="li_select">Offres</li></a>
						<a class="span_headerVertical" href="login.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp7=ob_get_clean();?><?php if (($_tmp7=='login')){?>
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="login.php"><li class="li_select">Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp8=ob_get_clean();?><?php if (($_tmp8=='a_propos')){?>
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="login.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li class="li_select">A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp9=ob_get_clean();?><?php if (($_tmp9=='contact')){?>
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="login.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li  class="li_select">Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp10=ob_get_clean();?><?php if (($_tmp10=='home_page')){?>
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li  class="li_select_entreprise">Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp11=ob_get_clean();?><?php if (($_tmp11=='infos_compte')){?>
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li  class="li_select_entreprise">Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp12=ob_get_clean();?><?php if (($_tmp12=='import_fichier')){?>
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li  class="li_select_entreprise">Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp13=ob_get_clean();?><?php if (($_tmp13=='visualisation')){?>
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li  class="li_select_entreprise">Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp14=ob_get_clean();?><?php if (($_tmp14=='stat_compte')){?>
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li  class="li_select_entreprise">Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp15=ob_get_clean();?><?php if (($_tmp15=='changer_offre')){?>
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li  class="li_select_entreprise">Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					<?php }?>

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp16=ob_get_clean();?><?php if (($_tmp16=='contact')){?>
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li  class="li_select_entreprise">Contact</li></a>
					<?php }?>

				</ul>
			</nav>

			<center>
				<div id="credit">
					©2015_Data4All
				</div>
			</center>

		</aside>

	</header>

	<div id="page">

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp17=ob_get_clean();?><?php if (($_tmp17=='index')){?>
			<div id="navHorizontal_connexion">
				<?php echo $_smarty_tpl->getSubTemplate ('formulaires/formulaire_connexion.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>	
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp18=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp19=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp20=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp21=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp22=ob_get_clean();?><?php if (($_tmp18=='search'||$_tmp19=='liste_entreprises'||$_tmp20=='a_propos'||$_tmp21=='login'||$_tmp22=='offres')){?>
		<div class="navHorizontalNonIndex">
			<div id="titrePage">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp23=ob_get_clean();?><?php if (($_tmp23=='search')){?> Recherche <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp24=ob_get_clean();?><?php if (($_tmp24=='liste_entreprises')){?> Liste des Entreprises  <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp25=ob_get_clean();?><?php if (($_tmp25=='a_propos')){?> A Propos <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp26=ob_get_clean();?><?php if (($_tmp26=='login')){?> Inscription <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp27=ob_get_clean();?><?php if (($_tmp27=='offres')){?> Offres <?php }?>
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp28=ob_get_clean();?><?php if (($_tmp28=='admin_entreprise')){?>
		<div class="navHorizontal_admin_entreprise">
			<div id="titrePage">
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp29=ob_get_clean();?><?php if (($_tmp29=='home_page')){?> Accueil - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp30=ob_get_clean();?><?php if (($_tmp30=='changer_offre')){?> Changer d'offre - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp31=ob_get_clean();?><?php if (($_tmp31=='stat_compte')){?> Statistique Compte - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp32=ob_get_clean();?><?php if (($_tmp32=='import_fichier')){?> Importer Fichiers - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp33=ob_get_clean();?><?php if (($_tmp33=='infos_compte')){?> Informations - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp34=ob_get_clean();?><?php if (($_tmp34=='visualisation')){?> Visualisation - Nom Entreprise <?php }?>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp35=ob_get_clean();?><?php if (($_tmp35=='contact')){?> Contact - Nom Entreprise <?php }?>
			</div>
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['admin_entreprise']->value;?>
<?php $_tmp36=ob_get_clean();?><?php if (($_tmp36=='home_page')){?>
			<div id="bouton_deco">
				<a class="decon" href="htdocs/login.php">Log Out</a>
			</div>
			<?php }?>

		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp37=ob_get_clean();?><?php if (($_tmp37=='ouvrirDonnees')){?> 
		<div class="navHorizontalOuvrirDonnees">
			<div id="titrePage">
				Ouvrir ses Données 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp38=ob_get_clean();?><?php if (($_tmp38=='transparence')){?> 
		<div class="navHorizontalTransparence">
			<div id="titrePage">
				Transparence 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp39=ob_get_clean();?><?php if (($_tmp39=='gagnerCompetivite')){?> 
		<div class="navHorizontalGagnerCompetivite">
			<div id="titrePage">
				Gagner en Competivité 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp40=ob_get_clean();?><?php if (($_tmp40=='demarcheCitoyenne')){?> 
		<div class="navHorizontalDemarcheCitoyenne">
			<div id="titrePage">
				Demarche Citoyenne 
			</div>
		</div>
		<?php }?>

		<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php $_tmp41=ob_get_clean();?><?php if (($_tmp41=='contact')){?> 
		<div class="navHorizontalContact">
			<div id="titrePage">
				Contact 
			</div>
		</div>
		<?php }?>

<?php }} ?>