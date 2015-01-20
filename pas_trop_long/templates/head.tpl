<!DOCTYPE html>
<html lang="fr">
  
	<head>
		
	  	<meta charset="utf-8" />
	    <title>Data 4 All</title>

	    <link rel="icon" type="image/png" href="images/...png" />
		<link rel="apple-touch-icon-precomposed" href="images/...png" />

		{if ($js_tab|@count) != 0}
		{foreach name=outer item=js from=$js_tab}
			<script src="{$js}"></script>
		{/foreach}
		{/if}	

		{if ($css_tab|@count) != 0}
		{foreach name=outer item=css from=$css_tab}
			<link rel="stylesheet" href="{$css}"/>
		{/foreach}
		{/if}	

  	</head>