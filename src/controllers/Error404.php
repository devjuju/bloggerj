<?php

namespace App\Controllers;

class Error404
{
    public function error404()
    {
        
        require('views/404.php');
    }
}