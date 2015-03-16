<?php

require_once _MODEL_.'Entreprise.php';

class EntrepriseController
{
    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     *
     * @url GET /entreprise
     */
    public function listeEntreprise()
    {
        $data = new Entreprise();
        return json_encode($data->getListeEntreprise());
    }

}