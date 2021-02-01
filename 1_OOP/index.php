<?php
class User{
    public $name;
    public $lastName;
    public $role;
    public $description;


    public function __construct($name,$lastName,$role){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->role = $role;
    }

    public function addDescription($description) {
        $this->description = $description;
    }


}

$userOne = new User('Linas', 'Pelenis', 'admin');
$userOne->addDescription('puikus adminas');
echo $userOne->name;




