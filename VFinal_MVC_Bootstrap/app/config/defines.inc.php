<?php

// Si on a pas ces infos, rien ne peut fonctionner : die
if (!isset($_SERVER['DOCUMENT_ROOT']))
    die();

// Define de la racine du site
define('_PATH_', dirname(dirname(dirname(__FILE__).'/').'/'));

// Define du dossier Coeur
define('_CORE_', _PATH_ . '/app/core/');

// Define du dossier des Controleurs
define('_CTRL_', _PATH_ . '/app/controllers/');

// Define du dossier des Configs
define('_CONFIG_', _PATH_ . '/app/config/');

// Define du dossier des TPL
define('_TPL_', _PATH_ . '/app/tpl/');

// Define du dossier des logs
define('_LOGS_', _PATH_ . '/app/logs/');

?>