<?php

class Adress {
    private $addressID;
    private $ville;
    private $quartier;
    private $rue;
    private $codePostal;
    private $email;
    private $phone;
    public function __construct()
    {

    }

    public function getAdressID() {
        return $this->addressID;
    }
    public function setAdressID($adressID) {
        return $this->addressID = $adressID;
    }

    public function getVille() {
        return $this->ville;
    }
    public function setVille($ville) {
        return $this->ville = $ville;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        return $this->email = $email;
    }
    public function getPhone() {
        return $this->phone;
    }
    public function setPhone($phone) {
        return $this->phone = $phone;
    }
    public function getQuartier() {
        return $this->quartier;
    }
    public function setQuartier($quartier) {
        return $this->quartier = $quartier;
    }
    public function getrue() {
        return $this->rue;
    }
    public function setrue($rue) {
        return $this->rue = $rue;
    }
    public function getcodePostal() {
        return $this->codePostal;
    }
    public function setcodePostal($codePostal) {
        return $this->codePostal = $codePostal;
    }


}


?>