<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/bank-app/datacnx.php");
class Atm {
    private $id;
    private $longitude;
    private $latitude;
    private $address;
    private Bank $bank;

   

    public function __construct() {

    }

    public function getAtmID() {
        return $this->id;
    }
    public function setAtmID($id) {
        return $this->id = $id;
    }

    public function getLongitude() {
        $this->longitude;
    }
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
    }

    public function getLatitude() {
        $this->latitude;
    }
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    public function getAddress() {
        $this->address;
    }
    public function setAddress($address) {
        $this->address = $address;
    }

    public function getBank() {
        $this->bank;
    }
    public function setBankId(Bank $bank) {
        $this->bank = $bank;
    }



   
}



?>