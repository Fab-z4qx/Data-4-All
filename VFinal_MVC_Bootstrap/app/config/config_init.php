<?php 

// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require_once('defines.inc.php');
require_once('web/tools/smarty/Smarty.class.php');

// Chargement du coeur (tous les fichiers)
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

?>