<?php
class Bank {
    private $bankID;
    private $bankName;
    private $bankLogo ;

    public function __construct(){
       
    }

    public function getBankID(){
        return $this->bankID;
    }
    public function setBankID($bankID){
         return $this->bankID = $bankID;
    }
    public function getBankName(){
        return $this->bankName;
    }
    public function setBankName($bankName){
         $this->bankName = $bankName;
    }
    public function getBankLogo(){
        return $this->bankLogo;
    }
    public function setBankLogo($bankLogo){
         $this->bankLogo = $bankLogo;
    }
}

?>