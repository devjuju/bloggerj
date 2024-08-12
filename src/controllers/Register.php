<?php

namespace App\Controllers;
use App\Core\Request;
use App\Forms\FormRegister;
use App\Models\UsersModels;


require_once('src/core/request.php');
require_once('src/forms/formregister.php');
require_once('src/model/usersmodels.php');


require_once('src/model/model.php');
require_once('src/core/db.php');


class Register
{
    public function register()
    {   $users = new UsersModels();
       $test = $users->findAll();
        print_r($test);

        $request = new Request();
        $submit = $request->post('register');
       // var_dump($submit);
        if (isset($submit)) {
           
            $register = new UsersModels($request->post('register'));
            $formRegister = new FormRegister($register);
            $controle = $formRegister->validate();
             
          
            
        }
       
      
        require('views/register.php');
    }
}