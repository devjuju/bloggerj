<?php

namespace App\Core;

class Messages
{


    public static function setFlash($titre, $message, $type)
    {
        $mess = [
            'titre' => $titre,
            'message' => $message,
            'type' => $type
        ];
        return $mess;
    }


    public static function flashMessage($mess)
    {

        foreach ($mess as $msg) {
            echo '<div class="alert alert-' . $msg['type'] . 'alert-dismissible fade show" role="alert"><span class="fw-bold">' . $msg['titre'] . '</span>' . $msg['message'] . ' <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
    }
}
