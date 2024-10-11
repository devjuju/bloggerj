<?php

namespace App\Controllers;

use App\Core\Request;
use App\Forms\FormRegister;
use App\Model\UsersModels;



class Register
{
    public function register()
    {

        $request = new Request();
        $submit = $request->post('register');
        // var_dump($submit);
        if (isset($submit)) {

            $register = new UsersModels($request->post('register'));
            $formRegister = new FormRegister($register);
            $controle = $formRegister->validate();
            if ($controle === true) {

                $register->setRole('utilisateur');
                $register->setAvatar('profil-user-defaut-img.svg');
                $register->setStatus('1');


                // On chiffre le mot de passe
                $register->setPassword(password_hash($register->getPassword(), PASSWORD_BCRYPT));


                // On stocke l'utilisateur
                $register->create();
                header('Location: index.php');
            }
        }


        require('../templates/frontend/register/index.php');
    }
}
