<?php
namespace Users;
class Student extends User implements UserFactory
{

    private $average;

    public function __construct($name, $lastName, $role, $average)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->role = $role;
        $this->average = $average;
    }

    public function addDescription($description)
    {
        // TODO: Implement addDescription() method.
        $this->description = $description;
    }
    public function getUserData()
    {
        // TODO: Implement getUserData() method.

            $this->userData [] = $this->name;
            $this->userData [] = $this->lastName;
            $this->userData [] = $this->role;
            $this->userData [] = $this->description;
            return $this->userData;

    }
    public function showName()
    {
        // TODO: Implement showName() method.
        return $this->name;
    }
}

