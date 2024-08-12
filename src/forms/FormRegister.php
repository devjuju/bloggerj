<?php

namespace App\Forms;

require_once('src/validators/validatorregister.php');
use App\Validators\ValidatorRegister;

class FormRegister
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

 
    public function validate()
    {   
        $validator = new ValidatorRegister($this->data);
        $result = $validator->checkData();
        print_r($result);
        
            foreach ($result as $key => $value) { 
                if ($value === true) {
                    unset($result[array_search($key, $result)]);
                }
            }
       return $result;

      
    }
  
}
