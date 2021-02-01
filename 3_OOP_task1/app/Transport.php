<?php
namespace Transports;
class Transport
{
    public $brand;
    public $model;

    protected $price;
    protected $weight;
    protected $engine;
    protected $kw;
    protected $maxSpeed;
    protected $description;
    protected $passengerNumber;
    protected $bikeData = [];


    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
    public function getGeneralData(){
        $this->bikeData [] = $this->brand;
        $this->bikeData [] = $this->model;
        $this->bikeData [] = $this->price;
        $this->bikeData [] = $this->weight;
        $this->bikeData [] = $this->description;
        return $this->bikeData;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }
    public function getBrand() {
        return $this->brand;
    }
    public function setModel($model) {
        $this->model = $model;
    }
    public function getModel() {
        return $this->model;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }
    public function setWeight($weight) {
        $this->weight = $weight;
    }
    public function getWeight() {
        return $this->weight;
    }
    public function setEngine($engine) {
        $this->engine = $engine;
    }
    public function getEngine() {
        return $this->engine;
    }
    public function setKw($kw) {
        $this->kw = $kw;
    }
    public function getKw() {
        return $this->kw;
    }
    public function setMaxSpeed($maxSpeed) {
        $this->maxSpeed = $maxSpeed;
    }
    public function getMaxSpeed() {
        return $this->maxSpeed;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }
    public function setPassengerNumber($passengerNumber) {
        $this->passengerNumber = $passengerNumber;
    }
    public function getPassengerNumber() {
        return $this->passengerNumber;
    }

}