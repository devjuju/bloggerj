<?php

namespace App\Controllers;

use App\Core\Session;

class Admin
{
    public function admin()
    {

        $mySession = new Session;
        if ($mySession->get('auth', 'role') === 'administrateur') { // from frontendController checkUser() method via Router
            header('Location: index.php?action=admin');
        }
        require('../templates/backend/admin/index.php');
    }
}
