{include file='header.tpl'}


	{if ($req_tab|@count) != 0}
		{foreach name=nr item=js from=$req}
			<section class="contentListeEntreprise">
			<div class="titreContent">{$req[nr].nom_entreprise}</div>
			<a class="boutonListeEntreprise" href="entreprise1.php"> voir plus </a>
			</section>
		{/foreach}
	{/if}	

{include file='footer.tpl'}