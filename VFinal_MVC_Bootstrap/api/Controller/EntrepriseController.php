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
        $ent = new Entreprise();
        return json_encode($ent->getListeEntreprise());
    }

    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     *
     * @url GET /entreprise/$id
     */
    public function infoEntreprise($id)
    {
        $ent = new Entreprise();
        if ($ent) {
            return json_encode($ent->getInfoEntreprise($id));
        }
        throw new RestException(404, 'User not found');
    }



}