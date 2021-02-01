<?php
namespace Transports;
class Car extends Transport
{

    private $doors;

    public function __construct($brand, $model, $doors)
    {
        parent::__construct($brand, $model);
        $this->doors = $doors;
    }

    public function setDoors($doors){
        $this->doors = $doors;
    }
    public function getDoors(){
        return $this->doors;
    }

}
