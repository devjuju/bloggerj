<?php

namespace App\Validators;

use App\Core\Validator;
require_once('src/core/validator.php');

class ValidatorContact extends Validator
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function checkData()
    {
        $resultLastname = $this->checkLastname($this->data->getLastname());
        $resultFirstname = $this->checkFirstname($this->data->getFirstname());
        $resultEmail = $this->checkEmail($this->data->getEmail());
        $resultSujet = $this->checkSujet($this->data->getSubject());
        $resultMessage = $this->checkMessage($this->data->getMessage());

       

        if ($resultEmail && $resultSujet && $resultFirstname && $resultLastname && $resultMessage === true) {
            return true;
        } else {
            $errors = [
                'email' => $resultEmail,
                'sujet' => $resultSujet,
                'firstname' => $resultFirstname,
                'lastname' => $resultLastname,
                'message' => $resultMessage,
            ];
            return $errors;

        }

        //return $resultEmail;
        // valider sujet
        // valider message
    }

    public function checkEmail($email)
    {
        if(empty($email)) {
            return "Le mail est requis";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return  "La valeur du mail est invalide";
        } else {
            return true;
        }
    }

    public function checkSujet($subject)
    {
        if(empty($subject)) {
            return "Le sujet est requis";
        } elseif ($this->isSmallThan($subject, 5)) {
            return "5 caractères minimum";
        } else {
            return true;
        }
    }

    public function checkFirstname($firstname)
    {
        if(empty($firstname)) {
            return "Le prénom est requis";
        } elseif ($this->isSmallThan($firstname, 5)) {
            return "c'est plus petit que 5 caractères";
        }elseif ($this->isRespectedPattern($firstname)){
            return "Le prénom doit contenir seulement des caractères";
        } else {
            return true;
        }
    }


    public function checkLastname($lastname)
    {
        if(empty($lastname)) {
            return "Le nom est requis";
        } elseif ($this->isSmallThan($lastname, 5)) {
            return "c'est plus petit que 5 caractères";
        }elseif ($this->isRespectedPattern($lastname)){
            return "Le nom doit contenir seulement des caractères";
        }else {
            return true;
        }
    }

    public function checkMessage($message)
    {
        if(empty($message)) {
            return "Le message est requis";
        } elseif ($this->isSmallThan($message, 15)) {
            return "15 caractères minimum";
        }else {
            return true;
        }
    }

}