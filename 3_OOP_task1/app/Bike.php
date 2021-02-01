<?php
namespace Transports;
class Bike extends Transport
{

    private $type;

    public function __construct($brand, $model, $type)
    {
        parent::__construct($brand, $model);
        $this->type = $type;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }
}