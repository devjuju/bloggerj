<?php

namespace App\Core;

class FatalError
{
    public function viewError()
    {

        require('../templates/error.php');
    }
}
