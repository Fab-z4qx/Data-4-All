{include file='head.tpl'}

<body>
    <header>
		<div class="logo">
				<a  class="span_header_logo" href="../index.php"> Data 4 All (logo) </a>
		</div>


		
		<nav>
			<ul>
				<li><a class="span_header" href="../index.php"> Accueil </a></li>
				{if ({$header} == 'index')}
					<li><a class="span_header" href="htdocs/search.php"> Recherche </a></li>
					<li><a class="span_header" href="htdocs/liste_entreprises.php"> Liste des entreprises </a></li>
					<li><a class="span_header" href="htdocs/login.php"> Se Connecter </a></li>
					<li><a class="span_header" href="htdocs/a_propos.php"> A Propos </a></li>
					<li><a class="span_header" href="htdocs/contact.php"> Contact </a></li>
				{/if}

				{if ({$header} != 'index')}
					<li><a class="span_header" href="search.php"> Recherche </a></li>
					<li><a class="span_header" href="liste_entreprises.php"> Liste des entreprises </a></li>
					<li><a class="span_header" href="login.php"> Se Connecter </a></li>
					<li><a class="span_header" href="a_propos.php"> A Propos </a></li>
					<li><a class="span_header" href="contact.php"> Contact </a></li>
				{/if}
			</ul>
		</nav>



	</header>
