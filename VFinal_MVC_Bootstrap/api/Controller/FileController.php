<?php

require_once _MODEL_API_.'DataFile.php';

class FileController
{
    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     *
     * @url GET /files
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
     * @url GET /file/$id/
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
     * @url GET /file/info/$id/
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
     * Returns a JSON string object to the browser with all data from file
     *
     * @url GET /file/value/$id_ent/$id_file
     */
    public function getDataFromFile($id_ent=null, $id_file=null)
    {
        $data = new DataFile();
        return $data->getData($id_ent, $id_file);
    }


    /**
     * Returns a JSON string object to the browser with all size of db
     *
     * @url GET /file/value/$id_ent/$id_file/$range1/$range2
     */
    public function getDataFromFileRange($id_ent=null, $id_file=null, $range1=null, $range2=null)
    {
        $data = new DataFile();
        return $data->getDataRange($id_ent, $id_file, $range1, $range2);
    }


    /**
     * Returns a JSON string object to the browser with specifiqueValue
     *
     * @url GET /file/value/$id_ent/$id_file/$collumn/$range1/$range2
     */
    public function getDataRangeCollumn($id_ent=null, $id_file=null,$collumn=null,$range1=null,$range2=null)
    {
        $data = new DataFile();
        return $data->getDataRangeCollumn($id_ent, $id_file, $collumn, $range1, $range2);
    }

    /*************************************************************************/
    /******************************** POST METHODE ***************************/
    /*************************************************************************/
 
    /**
     * Returns a JSON string object to the browser with specifiqueValue
     *
     * @url POST /file/upload/$id_ent
     * CURL EX : curl -i -F file=test -F filedata=@ex.xlsx http://localhost:8888/htdocs/D4A/Data4All/VFinal_MVC_Bootstrap/api/file/upload/1
     */
    public function postXlsFile($id_ent=null)
    {
        $data = new DataFile();
        $data->upload($id_ent);
        //return $data->getDataRangeCollumn($id_ent, $id_file, $collumn, $range1, $range2);
    }

    /*************************************************************************/
    /******************************** PUT METHODE ***************************/
    /*************************************************************************/
   
    



}