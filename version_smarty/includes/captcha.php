<?php

	function get_captcha()
	{
		return recaptcha_get_html('6LeGG-sSAAAAAMMefaLjooNSBcBEqg61a6IhhpTE'); 
	}

	$smarty->register_function('get_captcha', 'get_captcha');
?>

