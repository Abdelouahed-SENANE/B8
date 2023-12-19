<?php

class Transaction {
    private $transactionID;
    private $montant;
    private $type;
    private Account $account;

    public function __construct()
    {
        
    }

    public function getTransactionID() {
        return $this->transactionID;
    }
    public function setTransactionID($transactionID) {
        return $this->transactionID = $transactionID;
    }
    public function getMontant() {
        return $this->montant;
    }
    public function setMontant($montant) {
        return $this->montant = $montant;
    }
    public function getType() {
        return $this->type;
    }
    public function setType($type) {
        return $this->type = $type;
    }
    public function getAccount() {
        return $this->account;
    }
    public function setAccount(Account $account) {
        return $this->account = $account;
    }
}





?>