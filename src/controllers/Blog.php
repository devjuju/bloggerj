<?php

namespace App\Controllers;

use App\Model\PostModels;

class Blog
{
    public function blog()
    {
        $post = new PostModels;
        $posts = $post->findAll();
        require('../templates/frontend/blog/index.php');
    }
}
