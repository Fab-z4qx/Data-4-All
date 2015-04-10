<?php

//require_once(_MODEL_.'Adresse.php');
require_once(_MODEL_.'Entreprise.php');
require_once(_MODEL_.'User.php');
require_once(_MODEL_.'Contact.php');

class FormulaireController extends Controller 
{
   public function display() 
   {
   	 //To Do
   }

   public function createAccount()
   {
      if(!isset($_POST) && !empty($_POST))
      {  
         /*********************************************************/
         /************** VUE SMARTY A AJOUTER *********************/
         /*********************************************************/
         //echo "erreur aucune information";
         $this->smarty->assign('account', 'aucune_information');
         $this->smarty->display(_TPL_PUBLIC_.'accueil.tpl');
         exit();
      }

      extract($_POST);
      $valid = $this->verifValue();
      if($valid==true)
      {   
         /* Ajout de l'adresse */
         $adresse = new Adresse();
         $id_of_inserted_adresse = $adresse->insert($_POST['adresse'], $adresse_complementaire, $ville, $code_postal, $pays);

         /* Ajout de l'entreprise */
         if(empty($id_of_inserted_adresse))
         {
            /*********************************************************/
            /************** VUE SMARTY A AJOUTER *********************/
            /*********************************************************/
             $this->smarty->assign('account', 'adresse_error');
             $this->smarty->display(_TPL_PUBLIC_.'accueil.tpl');
            //echo "adresse error"; 
            exit();
         }

         $entreprise = new Entreprise();
         $id_of_inserted_entreprise = $entreprise->insert($nom_entreprise, $email_entreprise, $siret_entreprise, $tel_entreprise, $fax_entreprise,
                                      $forme_juridique_entreprise,$activite_entreprise, $id_of_inserted_adresse);

         if(empty($id_of_inserted_entreprise))
         {
            /*********************************************************/
            /************** VUE SMARTY A AJOUTER *********************/
            /*********************************************************/
            //echo "entreprise error"; 
            $this->smarty->assign('account', 'entreprise_error');
            $this->smarty->display(_TPL_PUBLIC_.'accueil.tpl');
            exit();
         }
         /* Ajout de l'utilisateur */
         $user = new User();
         $id_of_inserted_user = $user->insert($password,$email_entreprise,ROLE_ENTREPRISE, $id_of_inserted_entreprise);

         if(!empty($id_of_inserted_user))
         {
            $result = $entreprise->createDbData($id_of_inserted_entreprise);
            /*********************************************************/
            /************** VUE SMARTY A AJOUTER *********************/
            /*********************************************************/
         }
      }
         /*********************************************************/
         /************** VUE SMARTY A AJOUTER *********************/
         /*********************************************************/
      //var_dump($this);
      $this->smarty->assign('account', 'compte_cree');
      include _TPL_COMMON_.'head.tpl';
      $this->smarty->display(_TPL_PUBLIC_.'accueil.tpl');
      include _TPL_COMMON_.'footer.tpl';
      //header('Location:index.php');   
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

   public function contact()
   {

      /*********************************************************/
      /************** INJECTION SQL ****************************/
      /*********************************************************/
      $cont = new Contact();
      $res = $cont->insert($_POST['nom'], $_POST['email'], $_POST['subject'], $_POST['message']);

      if($res != NULL)
      {
         /*********************************************************/
         /************** VUE SMARTY A AJOUTER *********************/
         /*********************************************************/

         echo 'VOTRE REQUETE A ETE ENVOYEE';
      }
      else 
      {
         /*********************************************************/
         /************** VUE SMARTY A AJOUTER *********************/
         /*********************************************************/
         echo 'Probleme';
      }

   }
}

?>
