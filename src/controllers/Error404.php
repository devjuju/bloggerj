<?php

namespace App\Controllers;

class Error404
{
    public function error404()
    {
        
        require('../templates/404.php');
    }
}