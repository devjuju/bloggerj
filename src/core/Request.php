<?php

namespace App\Core;

class Request
{
    private $_post;
    private $_get;

    public function __construct()
    {
        $this->_post = $_POST;
        $this->_get = $_GET;
    }

    public function post($key = null)
    {
        return $this->checkGlobal($this->_post, $key);
        if (empty(filter_var(stripslashes($this->_post, $key), FILTER_SANITIZE_SPECIAL_CHARS))) {
            $this->checkGlobal($this->_post, $key);
        }
    }

    public function get($key = null)
    {
        return $this->checkGlobal($this->_get, $key);
        if (empty(filter_var(stripslashes($this->_get, $key), FILTER_SANITIZE_SPECIAL_CHARS))) {
            $this->checkGlobal($this->_get, $key);
        }

    }
    /* vérifier la requête en lui passant une clé */
    /* get['action'], dans le router */
    /* index.php?action=contact */
    private function checkGlobal($global, $key = null)
    {   /* si la clé de la requête existe */
        if ($key) {
            if (isset($global[$key])) {
                return $global[$key];
            }
            return null;
        }
        return $global;
    }
}