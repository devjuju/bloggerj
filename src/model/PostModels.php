<?php
namespace App\Models;
require_once('src/model/model.php');
class PostModels extends Model{
    protected $id;
    protected $user_id;
    protected $category;
    protected $title;
    protected $introduction;
    protected $content;
    protected $image;
    protected $created_at;
    protected $updated_at;
    protected $active;

    public function __construct($data = null)
    {   
       
        $this->table = 'posts';
            
        $this->setId($data['id']?? null);
        $this->setUserId($data['user_id']?? null);
        $this->setTitle($data['title']?? null);
        $this->setCategory($data['category']?? null);
        $this->setContent($data['content']?? null);
        $this->setImage($data['image']?? null);
        $this->setCreatedAt($data['created_at']?? null);
        $this->setUpdated($data['updated_at']?? null);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
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


    public function getIntro()
    {
        return $this->introduction;
    }

    public function setIntro($introduction)
    {
        $this->introduction = $introduction;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
    
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }
    

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setUpdated($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
}
