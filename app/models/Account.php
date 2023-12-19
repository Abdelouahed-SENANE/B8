<?php
class Account {
    private $accountID;
    private $balance;
    private $rib;
    private User $user;

   

    public function __construct() {

    }

    public function getAccountID() {
        $this->accountID;
    }
    public function setAccountId($accountID) {
        $this->accountID = $accountID;
    }

    public function getBalance() {
        $this->balance;
    }
    public function setBalance($balance) {
        $this->balance = $balance;
    }

    public function getRib() {
        $this->rib;
    }
    public function setRib($rib) {
        $this->rib = $rib;
    }

    public function getUser() {
        $this->user;
    }
    public function setUser(User $user) {
        $this->user = $user;
    }
   
}



?>