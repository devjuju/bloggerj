<?php

namespace App\Controllers;

use App\Core\Session;

class Logout
{
    public function logout()
    {
        $session = new Session();
        $session->stop(); //unset($_SESSION);  session_destroy();
        header('Location: index.php');
    }
}
