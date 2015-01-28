<?php 

$today = getdate();
define ("ANNEE_ACTUEL", $today['year']);

function verifierAdresseMail($adresse)
{
   $Syntaxe='/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
   return preg_match($Syntaxe,$adresse);
}

function verifierName($name)
{
  $Syntaxe="([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,30})";
   return preg_match($Syntaxe,$name);
}

function verifierJour($jour)
{
  $Syntaxe="([0-2]?[1-9]|3[01])";
   return preg_match($Syntaxe,$jour);
}

function verifierMois($mois)
{
  if($mois >= 1 && $mois <=12)
      return true;
   else
     return false;
}

function verifierAnnee($annee)
{
  if($annee >=1900 && $annee <= ANNEE_ACTUEL)
      return true;
   else
     return false;
}

function verifierAdresse($adresse)
{
  $Syntaxe = "/((^[0-9]*).?((BIS)|(TER)|(QUATER))?)?((\W+)|(^))(([a-z]+.)*)([0-9]{5})?.(([a-z\'']+.)*)$/";
 return preg_match($Syntaxe,$adresse);
}

function verifierVille($ville)
{
  $Syntaxe = "/^[ a-z|A-Z]+$/";
  return preg_match($Syntaxe,$ville);
}

function verifierPays($pays)
{
  $Syntaxe = "/^[ a-z|A-Z]+$/";
  return preg_match($Syntaxe,$pays);
}

function verifierCodePostal($cp)
{
  $Syntaxe = "/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/";
  return preg_match($Syntaxe,$cp); 
}

function verifierMobile($mobile)
{
  $Syntaxe = "/^[0-9]{10,10}$/";
  return preg_match($Syntaxe,$mobile);
}

?>