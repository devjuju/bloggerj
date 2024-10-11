<?php

namespace App\Core;

class SessionStatic
{
    protected $session;
    public function __construct()
    {
        $this->session = &$_SESSION;
    }
}
