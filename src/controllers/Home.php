<?php

namespace App\Controllers;

use App\Core\Auth;

class Home
{


    public function home()
    {
        // echo "<pre>";
        // var_dump(Auth::$auth);


        require('../templates/frontend/home/index.php');
    }
}
