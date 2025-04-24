<?php

namespace App\Model;

class CommentsOld extends Model
{

    protected $id;
    protected $users_id;
    protected $posts_id;
    protected $author;
    protected $content;
    protected $created_at;
    protected $is_valid;
    protected $status;


    public function __construct($data = null)
    {

        $this->table = 'comments';

        $this->setId($data['id'] ?? null);
        $this->setUsersId($data['users_id'] ?? null);
        $this->setPostsId($data['posts_id'] ?? null);
        $this->setAuthor($data['author'] ?? null);
        $this->setContent($data['content'] ?? null);
        $this->setCreatedAt($data['created_at'] ?? null);
        $this->setIsValid($data['is_valid'] ?? null);
        $this->setStatus($data['status'] ?? null);
    }




    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getUsersId(): int
    {
        return $this->users_id;
    }

    public function setUsersId($users_id)
    {
        $this->users_id = $users_id;
    }

    public function getPostsId()
    {
        return $this->posts_id;
    }

    public function setPostsId($posts_id)
    {
        $this->posts_id = $posts_id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getIsValid()
    {
        return $this->is_valid;
    }

    public function setIsValid($is_valid)
    {
        $this->is_valid = $is_valid;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
