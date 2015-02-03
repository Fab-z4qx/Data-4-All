<?php

function bytesToSize1024($bytes, $precision = 2) {
    $unit = array('B','KB','MB');
    return @round($bytes / pow(1024, ($i = floor(log($bytes, 1024)))), $precision).' '.$unit[$i];
}

$sFileName = $_FILES['image_file']['name'];
$sFileType = $_FILES['image_file']['type'];
$sFileSize = bytesToSize1024($_FILES['image_file']['size'], 1);


$target_dir = "file_uploaded/";
$target_dir = $target_dir . basename( $_FILES["image_file"]["name"]);
$uploadOk=1;

if (move_uploaded_file($_FILES["image_file"]["tmp_name"], $target_dir)) {
    echo "The file ". basename( $_FILES["image_file"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
    if ($_FILES['image_file']['error'] == UPLOAD_ERR_NO_FILE ) $erreur = "Fichier manquant";
    if ($_FILES['image_file']['error'] == UPLOAD_ERR_INI_SIZE ) $erreur = "Taille limite php";
    if ($_FILES['image_file']['error'] == UPLOAD_ERR_FORM_SIZE ) $erreur = "Taille max formulaire";
    if ($_FILES['image_file']['error'] == UPLOAD_ERR_PARTIAL ) $erreur = "Fichier partiellement transféré";
	echo $erreur;
}

if ($_FILES['image_file']['error'] > 0) $erreur = "Erreur lors du transfert";


echo <<<EOF
<p>Your file: {$sFileName} has been successfully received.</p>
<p>Type: {$sFileType}</p>
<p>Size: {$sFileSize}</p>
EOF;

?>
