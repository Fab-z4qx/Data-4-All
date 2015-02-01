{include file='header.tpl'}



{if Auth::isLogged('client') == true}
<div id="meilleur_offre">
	CLIENT blbqa
</div>
{else}
	$smarty->display('main.tpl');
{/if}


{include file='footer.tpl'}
