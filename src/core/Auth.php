<?php

namespace App\Core;



class Auth
{

    public static $auth;



    public function __construct()
    {
        $this->auth = &$_SESSION;
    }




    public static function set($name, $key, $value)
    {
        self::$auth[$name][$key] = $value;
    }

    public static function setMessage($message, $class, $title, $content, $value)
    {
        self::$auth[$message][$class][$title][$content] = $value;
    }


    public static function get($name, $key)
    {
        if (isset(self::$auth[$name][$key])) {
            return self::$auth[$name][$key];
        }
        return null;
    }

    public static function show($name, $key)
    {
        if (isset(self::$auth[$name][$key])) {
            $value = self::get($name, $key);
            self::remove($name, $key);
            return $value;
        }
        return null;
    }

    public static function remove($name, $key)
    {
        unset(self::$auth[$name][$key]);
    }

    public static function stop()
    {
        unset(self::$auth);
        session_destroy();
    }
}
