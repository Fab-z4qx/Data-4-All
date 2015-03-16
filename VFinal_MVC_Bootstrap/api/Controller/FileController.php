<?php

require_once _MODEL_API_.'DataFile.php';

class FileController
{
    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     *
     * @url GET /file
     */
    public function test()
    {
        $data = new DataFile();
        return "file test";
    }

     /**
     * Returns a JSON string object to the browser with all datafile name into db of entreprise
     *
     * @url GET /file/$id
     */
    public function getFileName($id)
    {
       $data = new DataFile();
       return $data->getFileName($id);
    }

     /**
     * Returns a JSON string object to the browser with all datafile name into db of entreprise
     *
     * @url GET /file/info/$id
     */
    public function getFileInfo($id=null)
    {
        $data = new DataFile();
        return $data->getFileInfo($id);
    }

    /**
     * Returns a JSON string object to the browser with all size of db
     *
     * @url GET /file/info/size/$id
     */
    public function getDbSize($id=null)
    {
        $data = new DataFile();
        return $data->getDbSize($id);
    }

    /**
     * Returns a JSON string object to the browser with all size of db
     *
     * @url GET /file/value/$id_ent/$id_file
     */
    public function getDataFromFile($id_ent=null, $id_file=null)
    {
        $data = new DataFile();
        return $data->getData($id_ent, $id_file);
    }
   

}