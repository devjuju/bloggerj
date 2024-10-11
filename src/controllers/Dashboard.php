<?php

namespace App\Controllers;

use App\Core\Session;

class Dashboard
{
    public function dashboard()
    {
        $mySession = new Session();
        if ($mySession->get('auth', 'role') != 'administrateur') { // from frontendController checkUser() method via Router
            header('Location: index.php');
        }
        require('../templates/backend/dashboard/index.php');
    }
}
