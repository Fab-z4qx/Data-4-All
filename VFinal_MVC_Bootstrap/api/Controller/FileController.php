<?php

require_once _MODEL_.'DataFile.php';

class FileController
{
    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     *
     * @url GET /file/
     */
    public function test()
    {
        $data = new DataFile();
        return "file test";
    }
   
}