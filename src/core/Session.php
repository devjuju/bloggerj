<?php

namespace App\Core;

class Session
{


    protected $session;

    public function __construct()
    {

        $this->session = &$_SESSION;
    }


    /* message flash */


    public function set($name, $key, $value)
    {
        $this->session[$name][$key] = $value;
    }

    public function setMessage($message, $class, $title, $content, $value)
    {
        $this->session[$message][$class][$title][$content] = $value;
    }


    public function get($name, $key)
    {
        if (isset($this->session[$name][$key])) {
            return $this->session[$name][$key];
        }
        return null;
    }

    public function show($name, $key)
    {
        if (isset($this->session[$name][$key])) {
            $value = $this->get($name, $key);
            $this->remove($name, $key);
            return $value;
        }
        return null;
    }

    public function remove($name, $key)
    {
        unset($this->session[$name][$key]);
    }

    public function stop()
    {
        unset($this->session);
        session_destroy();
    }
}
