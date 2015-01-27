{include file='head.tpl'}

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
						<a class="span_headerVertical" href="../index.php"> <li>Home</li></a>
						<a class="span_headerVertical" href="htdocs/search.php"><li>Search</li></a>
						<a class="span_headerVertical" href="htdocs/liste_entreprises.php"><li>Liste des entreprises</li></a>
						<a class="span_headerVertical" href="htdocs/login.php"><li>Sign Up</li></a>
						<a class="span_headerVertical" href="htdocs/offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="htdocs/a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="htdocs/contact.php"><li>Contact</li></a>
					{/if}

					{if ({$header} != 'index' && {$header} != 'admin_entreprise')}
						<a class="span_headerVertical" href="../index.php"> <li>Home</li></a>
						<a class="span_headerVertical" href="search.php"><li>Search</li></a>
						<a class="span_headerVertical" href="liste_entreprises.php"><li>Liste des entreprises</li></a>
						<a class="span_headerVertical" href="login.php"><li>Sign Up</li></a>
						<a class="span_headerVertical" href="offres.php"><li>Offres</li></a>
						<a class="span_headerVertical" href="a_propos.php"><li>A Propos</li></a>
						<a class="span_headerVertical" href="contact.php"><li>Contact</li></a>
					{/if}

					{if ({$header} == 'admin_entreprise')}
						<a class="span_headerVertical" href="admin_entreprise_home_page.php"><li>Home</li></a>
						<a class="span_headerVertical" href="admin_entreprise_infos_compte.php"><li>Infos Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_import_fichiers.php"><li>Upload Fichiers</li></a>
						<a class="span_headerVertical" href="admin_entreprise_visualisation.php"><li>Visualisation</li></a>
						<a class="span_headerVertical" href="admin_entreprise_stats_compte.php"><li>Stats Compte</li></a>
						<a class="span_headerVertical" href="admin_entreprise_changer_offre.php"><li>Changer d'offre</li></a>
						<a class="span_headerVertical" href="admin_entreprise_contact.php"><li>Contact</li></a>
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
				{if ({$header} == 'login')} Création de compte {/if}
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

		{if ({$header} == 'ouvrirDonnees')} 
		<div class="navHorizontalOuvrirDonnees">
			<div id="titrePage">
				Ouvrir ses Données 
			</div>
		</div>
		{/if}

		{if ({$header} == 'transparence')} 
		<div class="navHorizontalTransparence">
			<div id="titrePage">
				Transparence 
			</div>
		</div>
		{/if}

		{if ({$header} == 'gagnerCompetivite')} 
		<div class="navHorizontalGagnerCompetivite">
			<div id="titrePage">
				Gagner en Competivité 
			</div>
		</div>
		{/if}

		{if ({$header} == 'demarcheCitoyenne')} 
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

