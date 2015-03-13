<?php

class Contact {

	private $pdo;
	public function __construct()
	{
		$this->pdo = Database::getInstance();
	}

	public function insert($nom, $email, $subject, $message)
	{

      $contact_sql_req = "INSERT INTO contact 
      (`id_contact`, 
      `nom_contact`, 
      `email_contact`, 
      `sujet_contact`, 
      `message_contact`) 
      VALUES (NULL, 
      ".$this->pdo->quote($nom).",
      ".$this->pdo->quote($email).",
      ".$this->pdo->quote($subject).", 
      ".$this->pdo->quote($message).");";

      /* Ajout dans la table Contact */
      if($this->pdo->exec($contact_sql_req))
      {
      	return $this->pdo->lastInsertId();
      }
	}
}
?>