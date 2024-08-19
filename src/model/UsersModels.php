<?php

namespace App\Model;

use App\Model\Model;

class UsersModels extends Model
{  
    
    protected $id;
    protected $role;
    protected $avatar;
    protected $username;
    protected $lastname;
    protected $firstname;
    protected $email;
    protected $password;

    

    public function __construct($data = null)
    {   
       
        $this->table = 'users';
            
        $this->setId($data['id']?? null);
        $this->setAvatar($data['avatar']?? null);
        $this->setUsername($data['username']?? null);
        $this->setLastname($data['lastname']?? null);
        $this->setFirstname($data['firstname']?? null);
        $this->setRole($data['role']?? null);
        $this->setPassword($data['password']?? null);
        $this->setEmail($data['email']?? null);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }
    
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }


    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    
    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    public function getPassword()
    {
        return $this->password;
    }

    public function setSession()
    {
        $_SESSION['user'] = [
            'id' => $this->id,
            'email' => $this->email,
            'role' => $this->role
        ];
    }

    
 
    
}
