<?php

namespace App\Forms;

use App\Validators\ValidatorContact;
require_once('src/validators/validatorcontact.php');

class FormContact
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
       
        // prendre les données de $form
        // enregistrer les données avec les setters
    }

 
    public function validate()
    {   
        
        // valider les données en les recupérant avec les getters
        $validator = new ValidatorContact($this->data);
        $result = $validator->checkData();

      
        print_r($result);
        
            foreach ($result as $key => $value) { 
                if ($value === true) {
                    unset($result[array_search($key, $result)]);
                }
            }
        
        
        // renvoi true sinon renvoi un tableau avec les messages
        // exemple de tableau a retourner
        /* 'errors' => [
            'email' => 'le champ doit contenir plus de 5 caractères',
            'subjet' => 'ne doit pas être vide'
        ]*/
       return $result;
    }
  






}