{include file='head.tpl'}

<?php require("common.inc.php"); ?>
<body>
	
    <header>
		<aside>

			<center>
				<div class="logoVertical">
					<a  class="span_header_logoVertical" href="../index.php">
						{if ({$header} == 'index')}<img id="logo_site_header" src="images/logo_site_bord_gris.png"> </a>{/if}
						{if ({$header} != 'index')}<img id="logo_site_header" src="../images/logo_site_bord_gris.png"> </a>{/if}
				</div>
			</center>

			<nav>
				<ul>

					{if ({$header} == 'index')}
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="htdocs/search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="htdocs/liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="htdocs/offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="htdocs/register.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="htdocs/a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="htdocs/contact.php"><li>Contact</li></a>
					{/if}

					{if ({$header} == 'search')}
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li class="li_select">Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="register.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					{/if}

					{if ({$header} == 'liste_entreprises')}
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li class="li_select">Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="register.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					{/if}

					{if ({$header} == 'offres')}
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li class="li_select">Offres</li></a>
						<a class="span_headerVertical" href="register.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					{/if}

					{if ({$header} == 'login')}
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="register.php"><li class="li_select">Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					{/if}

					{if ({$header} == 'a_propos')}
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="register.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li class="li_select">A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					{/if}

					{if ({$header} == 'contact')}
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="register.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li  class="li_select">Contact</li></a>
					{/if}

					{if ({$header} == 'arguments')}
						<a class="span_headerVertical" href="../index.php"> <li>Accueil</li></a>
						<a class="span_headerVertical" href="search.php"><li>Recherche</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Entreprises</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="register.php"><li>Inscription</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					{/if}

					{if ({$admin_entreprise} == 'home_page')}
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li  class="li_select_entreprise">Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					{/if}

					{if ({$admin_entreprise} == 'infos_compte')}
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li  class="li_select_entreprise">Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					{/if}

					{if ({$admin_entreprise} == 'import_fichier')}
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li  class="li_select_entreprise">Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					{/if}

					{if ({$admin_entreprise} == 'visualisation')}
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li  class="li_select_entreprise">Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					{/if}

					{if ({$admin_entreprise} == 'stat_compte')}
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li  class="li_select_entreprise">Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					{/if}

					{if ({$admin_entreprise} == 'changer_offre')}
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li  class="li_select_entreprise">Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
					{/if}

					{if ({$admin_entreprise} == 'contact')}
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li  class="li_select_entreprise">Contact</li></a>
					{/if}

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

		{if ({$header} == 'index')}
			<div id="navHorizontal_connexion">
				{include file='formulaires/formulaire_connexion.tpl'}
			</div>	
		{/if}

		{if ({$header} == 'search' || {$header} == 'liste_entreprises' || {$header} == 'a_propos' || {$header} == 'login' || {$header} == 'offres')}
		<div class="navHorizontalNonIndex">
			<div id="titrePage">
				{if ({$header} == 'search')} Recherche {/if}
				{if ({$header} == 'liste_entreprises')} Liste des Entreprises  {/if}
				{if ({$header} == 'a_propos')} A Propos {/if}
				{if ({$header} == 'login')} Inscription {/if}
				{if ({$header} == 'offres')} Offres {/if}
			</div>
		</div>
		{/if}

		{if ({$header} == 'admin_entreprise')}
		<div class="navHorizontal_admin_entreprise">
			<div id="titrePage">
				{if ({$admin_entreprise} == 'home_page')} Accueil - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'changer_offre')} Changer d'offre - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'stat_compte')} Statistique Compte - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'import_fichier')} Importer Fichiers - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'infos_compte')} Informations - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'visualisation')} Visualisation - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'contact')} Contact - Nom Entreprise {/if}
			</div>
			{if ({$admin_entreprise} == 'home_page')}
			<div id="bouton_deco">
				<a class="decon" href="htdocs/login.php">Log Out</a>
			</div>
			{/if}

		</div>
		{/if}

		{if ({$header} == 'admin_particulier')}
		<div class="navHorizontal_admin_entreprise">
			<div id="titrePage">
				{if ({$admin_particulier} == 'home_page')} Bienvenue sur votre compte {/if}
				{if ({$admin_entreprise} == 'changer_offre')} Changer d'offre - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'stat_compte')} Statistique Compte - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'import_fichier')} Importer Fichiers - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'infos_compte')} Informations - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'visualisation')} Visualisation - Nom Entreprise {/if}
				{if ({$admin_entreprise} == 'contact')} Contact - Nom Entreprise {/if}
			</div>
			{if ({$admin_entreprise} == 'home_page')}
			<div id="bouton_deco">
				<a class="decon" href="htdocs/login.php">Log Out</a>
			</div>
			{/if}

		</div>
		{/if}

		{if ({$page} == 'ouvrirDonnees')} 
		<div class="navHorizontalOuvrirDonnees">
			<div id="titrePage">
				Ouvrir ses Données 
			</div>
		</div>
		{/if}

		{if ({$page} == 'transparence')} 
		<div class="navHorizontalTransparence">
			<div id="titrePage">
				Transparence 
			</div>
		</div>
		{/if}

		{if ({$page} == 'gagnerCompetivite')} 
		<div class="navHorizontalGagnerCompetivite">
			<div id="titrePage">
				Gagner en Competivité 
			</div>
		</div>
		{/if}

		{if ({$page} == 'demarcheCitoyenne')} 
		<div class="navHorizontalDemarcheCitoyenne">
			<div id="titrePage">
				Demarche Citoyenne 
			</div>
		</div>
		{/if}

		{if ({$header} == 'contact')} 
		<div class="navHorizontalContact">
			<div id="titrePage">
				Contact 
			</div>
		</div>
		{/if}

