<?php

namespace App\Model;

class PostModels extends Model
{
    protected $id;
    protected $users_id;
    protected $author;
    protected $title;
    protected $category;
    protected $excerpt;
    protected $content;
    protected $thumbnail_image;
    protected $featured_image;
    protected $created_at;
    protected $active;
    protected $status;

    public function __construct($data = null)
    {

        $this->table = 'posts';

        $this->setId($data['id'] ?? null);
        $this->setUsersId($data['users_id'] ?? null);
        $this->setAuthor($data['author'] ?? null);
        $this->setTitle($data['title'] ?? null);
        $this->setCategory($data['category'] ?? null);
        $this->setExcerpt($data['excerpt'] ?? null);
        $this->setContent($data['content'] ?? null);
        $this->setThumbnailImage($data['thumbnail_image'] ?? null);
        $this->setFeaturedImage($data['featured_image'] ?? null);
        $this->setCreatedAt($data['created_at'] ?? null);
        $this->setActive($data['active'] ?? null);
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
    public function getUsersId()
    {
        return $this->users_id;
    }

    public function setUsersId($users_id)
    {
        $this->users_id = $users_id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }


    public function getExcerpt()
    {
        return $this->excerpt;
    }

    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getThumbnailImage()
    {
        return $this->thumbnail_image;
    }

    public function setThumbnailImage($thumbnail_image)
    {
        $this->thumbnail_image = $thumbnail_image;
    }

    public function getFeaturedImage()
    {
        return $this->featured_image;
    }

    public function setFeaturedImage($featured_image)
    {
        $this->featured_image = $featured_image;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }


    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
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
