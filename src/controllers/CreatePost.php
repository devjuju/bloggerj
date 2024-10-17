<?php

namespace App\Controllers;

use App\Core\Messages;
use App\Core\Request;
use App\Core\Session;
use App\Forms\FormCreatePost;
use App\Model\PostModels;

class CreatePost
{
    public function createPost()
    {



        $request = new Request();
        $submit = $request->post('create_post');
        if (isset($submit)) {
            $createPost = new PostModels($request->post('create_post'));
            $formCreatePost = new FormCreatePost($createPost);
            $controle = $formCreatePost->validate();

            var_dump($controle);
            if ($controle === true) {

                $createPost->setThumbnailImage('bloggerj-thumbnail-img-2.png');
                $createPost->setFeaturedImage('bloggerj-featured-image-2.png');
                $createPost->setUsersId('1');
                $createPost->setStatus('Publié');
                $createPost->setActive('1');
                $createPost->create();
            }
        }








        require('../templates/backend/createpost/index.php');
    }
}
