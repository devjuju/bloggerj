<?php

namespace App\Controllers;
use App\Core\Request;
use App\Forms\FormLogin;
use App\Model\UsersModels;



class Login
{
    public function login()
    {   
        $request = new Request();
        $submit = $request->post('login');
        if (isset($submit)) {
           
            $login = new UsersModels($request->post('login'));
            $formLogin = new FormLogin($login);
            $controle = $formLogin->validate(); 
            
            if($controle){
              
            }

            
        }
       





        require('../templates/frontend/login/index.php');
    }
}