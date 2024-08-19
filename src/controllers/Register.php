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

            if($controle){

                
            

                 $password = $request->post('password');

                $register->setRole('visitor');
                $register->setAvatar('avatar.png');
                        
             
                 // On chiffre le mot de passe
                 $password = password_hash($request->post('password'), PASSWORD_DEFAULT);

               
                // On stocke l'utilisateur
                $register->create();
                
            }
             
          
            
        }
       
      
        require('../templates/frontend/register/index.php');
    }
}