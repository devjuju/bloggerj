<?php

namespace App\Model;


class UsersOld extends Model
{

    protected $id;
    protected $role;
    protected $image;
    protected $username;
    protected $lastname;
    protected $firstname;
    protected $email;
    protected $password;
    protected $status;

    public function __construct($data = null)
    {

        $this->table = 'users';

        $this->setId($data['id'] ?? null);
        $this->setImage($data['image'] ?? null);
        $this->setUsername($data['username'] ?? 'null');
        $this->setLastname($data['lastname'] ?? null);
        $this->setFirstname($data['firstname'] ?? null);
        $this->setRole($data['role'] ?? null);
        $this->setPassword($data['password'] ?? null);
        $this->setEmail($data['email'] ?? null);
        $this->setStatus($data['status'] ?? null);
    }

    public function findOneByEmail()
    {
        return $this->requete("SELECT * FROM {$this->table} WHERE email = ?", [$this->getEmail()])->fetch();
    }



    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
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

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
