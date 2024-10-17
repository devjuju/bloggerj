<?php

namespace App\Controllers;

use App\Model\PostModels;

class Posts
{
    public function posts()
    {
        $post = new PostModels;
        $posts = $post->findAll();

        require('../templates/backend/posts/index.php');
    }
}
