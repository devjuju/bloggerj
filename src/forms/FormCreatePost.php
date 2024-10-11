<?php

namespace App\Forms;

use App\Validators\ValidatorCreatePost;

class FormCreatePost
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function validate()
    {
        $validator = new ValidatorCreatePost($this->data);
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
