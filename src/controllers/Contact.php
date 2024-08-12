<?php

namespace App\Controllers;
use App\Core\Request;
use App\Forms\FormContact;

use App\Models\ContactModels;


require_once('src/core/request.php');
require_once('src/forms/formcontact.php');
require_once('src/model/contactmodels.php');



class Contact
{
    public function contact()
    {

        $request = new Request();
        $submit = $request->post('contact');
        //var_dump($request);
        if (isset($submit)) {
           
            $contact = new ContactModels($request->post('contact'));
            $formContact = new FormContact($contact);
            $controle = $formContact->validate();
        }
        

        require('views/contact.php');
    }

}