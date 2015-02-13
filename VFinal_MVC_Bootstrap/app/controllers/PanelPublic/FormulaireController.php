<?php


require_once(_MODEL_.'Adresse.php');
require_once(_MODEL_.'Entreprise.php');
require_once(_MODEL_.'User.php');

class FormulaireController extends Controller 
{
   //private $user;
   public function __construct()
   {
   	 //$this->user = new Users;
   } 

   public function display() 
   {
   	 //To Do
   }

   public function createAccount()
   {
      echo '<pre>';
      echo print_r($_POST); 
      echo '</pre>';

      if(!isset($_POST) && !empty($_POST))
      {  
         echo "erreur aucune information";
         exit();
      }

      extract($_POST);
      $valid = $this->verifValue();
      if($valid==true)
      //if($valid == true && captcha_valid())
      {   
         /* Ajout de l'adresse */
         $adresse = new Adresse();
         $id_of_inserted_adresse = $adresse->insert($_POST['adresse'], $adresse_complementaire, $ville, $code_postal, $pays);

         echo 'test';
         /* Ajout de l'entreprise */
         $entreprise = new Entreprise();
         $id_of_inserted_entreprise = $entreprise->insert($nom_entreprise, $email_entreprise, $siret_entreprise, $tel_entreprise, $fax_entreprise, null, 
                                     $date_immat_rcs_entreprise, $forme_juridique_entreprise, $num_tva_entreprise, $activite_entreprise, $id_of_inserted_adresse);

         /* Ajout de l'utilisateur */
         $user = new User();
         $id_of_inserted_user = $user->insert($password,$email_entreprise,ROLE_ENTREPRISE, $id_of_inserted_entreprise);
      }
		//TO DO
   }


   public function verifValue()
   {
         $valid = true;
         extract($_POST);
         if( !verifierAdresseMail($email_entreprise) ) //Si les emails sont invalides
         {
            echo('<div class="information_invalide">Les emails ne sont pas des mail!</div>');
            $valid = false;
         }

         if( isset($nom_entreprise) && !empty($nom_entreprise) ) // Si le nom ou le prenom n'est pas valide != ^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,30})$
         {
            if(!verifierName($nom_entreprise)){
               echo('<div class="information_invalide">Nom invalide!</div>');
               $valid = false;
            }
         }
         else{
            echo('<div class="information_invalide">Pas de nom donné!</div>');
            $valid = false;
         }

         if(isset($adresse) && !empty($adresse))
         {
            if( !verifierAdresse($adresse) )
            {
               echo('<div class="information_invalide">Adresse invalide</div>');
               $valid = false;
            }
         }
         else{ 
            echo('<div class="information_invalide">Adresse non renseigné!</div>');
            $valid = false;
         }


         if(isset($adresse_complementaire) && !empty($adresse_complementaire) && !verifierAdresse($adresse_complementaire) ){
               echo('<div class="information_invalide">Complement d\'adresse invalide</div>');
               $valid = false;
         }

         if(isset($code_postal) && !empty($code_postal))
         {
            if( !verifierCodePostal($code_postal) ){
               echo('<div class="information_invalide">Code postal invalide</div>');
               $valid = false;
            }
         }
         else {
            echo('<div class="information_invalide">Code postal non renseigné!</div>');
            $valid = false;
         }

         if(isset($ville) && !empty($ville))
         {
            if( !verifierVille($ville) ){
               echo('<div class="information_invalide">Ville invalide</div>');
               $valid = false;
            }
         }
         else {
            echo('<div class="information_invalide">Ville non renseigné!</div>');
            $valid = false;
         }

         if(isset($pays) && !empty($pays))
         {
            if( !verifierPays($pays) ){
               echo('<div class="information_invalide">Pays invalide</div>');
               $valid = false;
            }
         }
         else {
            echo('<div class="information_invalide">Pays non renseigné!</div>');
            $valid = false;
         }

         if(isset($tel_entreprise) && !empty($tel_entreprise) && !verifierMobile($tel_entreprise) ){
               echo('<div class="information_invalide">Numero de fix invalide</div>');
               $valid = false;
         }

         if( isset($password) && !empty($password) && isset($password_confirmation) && !empty($password_confirmation))
         {
            if( $password != $password_confirmation )
            {
               echo('<div class="information_invalide">La verification du password est incorrecte</div>');
               $valid = false;
            }
         }
         else { 
            echo('<div class="information_invalide">Password non définit</div>');
            $valid = false;
         }

         return $valid;
   }

   public function question()
   {
		//TO DO
   }
}

?>
