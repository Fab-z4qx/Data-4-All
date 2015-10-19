<?php
//chargement de la bibliothèque smarty
require(SMARTY_DIR.'Smarty.class.php');

class Smarty_datat4all extends Smarty{
	function Smarty_datat4all(){
		//constructeur de la classe
			parent::__construct();
			
			$this->template_dir    =ROOT_DIR.'templates/';
			$this->compile_dir     =ROOT_DIR.'templates_c/';
			$this->config_dir      =ROOT_DIR.'configs/';
			$this->cache_dir       =ROOT_DIR.'cache/';
			$this->caching         =FALSE;
	}
}
?>