<?php

if(!isset($_SESSION)){
		session_start();
}
if(!Auth::isLogged('admin') || !Auth::isLogged('client') ){ 
	header('Location:index.php?id=login');
}
?>	
	<div class="content">
		<div class ="principal">
			<h1>PAGE DE GESTION MEMBRE</h1>
		</div>
	</div>
