<?php
namespace App\Libraries;

class Validate
{
    public function run($instance)
    {
        $validation =  \Config\Services::validation();
      
        if($validation) {
            return $validation->getErrors();
        }
      
        return true;
    }
}