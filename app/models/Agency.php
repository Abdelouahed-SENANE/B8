<?php

class Agency {
    private $agencyID;
    private $longitude;
    private  $latitude;
    private Bank $bank;
    private Adress $adress;
    public function __construct()
    {
            
        echo $this->agencyID;

    }

    public function getAgencyID() {
        return $this->agencyID;
    }
    public function setAgencyID($agencyID) {
        return $this->agencyID = $agencyID;
    }
    public function getLongitude() {
        return $this->longitude;
    }
    public function setLongitude($longitude) {
        return $this->longitude = $longitude;
    }
    public function getLatitude() {
        return $this->latitude;
    }
    public function setlatitude($latitude) {
        return $this->latitude = $latitude;
    }
    public function getBank() {
        return $this->bank;
    }
    public function setBank(Bank $bank) {
        return $this->bank  = $bank;
    }
    public function getAdress() {
        return $this->adress;
    }
    public function setAdress(Adress $adress) {
        return $this->adress  = $adress;
    }
}

?>