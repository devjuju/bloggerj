<?php

namespace App\Core;

class SessionFlash
{


    public static function renderSessionFlash()
    {
        $session = &$_SESSION;

        $flash = null;
        if (isset($session['flash'])) {
            $flash = $session['flash'];
            unset($session['flash']);
        }
        return $flash;
    }

    public static function sessionFlash(string $type, string $content)
    {
        $session = &$_SESSION;
        $type = strtolower($type);
        $session['flash'] = [
            "type" => $type,
            "content" => $content
        ];
    }

    //$mySession->set('message', 'class', "title");
    //$mySession->set('message', 'class', "success");
}
