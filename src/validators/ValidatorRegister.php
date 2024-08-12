<?php

namespace App\Validators;

use App\Core\Validator;

class ValidatorRegister extends Validator
{
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function checkData()
    {   

        $resultUsername = $this->checkUsername($this->data->getUsername());
        $resultLastname = $this->checkLastname($this->data->getLastName());
        $resultFirstname = $this->checkFirstname($this->data->getFirstname());
        $resultEmail = $this->checkEmail($this->data->getEmail());
        $resultPassword = $this->checkPassword($this->data->getPassword());

      

        if ($resultUsername && $resultLastname && $resultFirstname && $resultEmail && $resultPassword === true) {
            return true;
            
        } else {
            $errors = [
                'username' => $resultUsername,
                'lastname' => $resultLastname,
                'firstname' => $resultFirstname,
                'email' => $resultEmail,
                'password' => $resultPassword,
            ];
            return $errors;
        }
    }
    

    public function checkUsername($username)
    {
        if(empty($username)) {
            return "Entrer votre prénom";
        } elseif ($this->isSmallThan($username, 5)) {
            return "c'est plus petit que 5 caractères";
        }else {
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


    public function checkEmail($email)
    {
        if(empty($email)) {
            return "Entrer votre adresse email ";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return  "Adresse email invalide";
        } else {
            return true;
        }
    }

    public function checkPassword($password)
    {
        if(empty($password)) {
            return "Créer un mot de passe";
        } elseif ($this->isSmallThan($password, 10)) {
            return "10 caractères minimum";
        } else {
            return true;
        }
    }

    public function checkConfirmPassword($confirm_password)
    {
        if(empty($confirm_password)) {
            return "Il faut répéter le mot de passe";
        }else {
            return true;
        }
    }
}
