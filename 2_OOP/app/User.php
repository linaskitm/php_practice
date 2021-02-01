<?php
namespace Users;
abstract class User{
    protected $name;
    protected $lastName;
    protected $role;
    protected $description;
    protected $userData = [];


    public function __construct($name,$lastName,$role){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->role = $role;
    }

    abstract public function addDescription($description);

    abstract public function getUserData();


}