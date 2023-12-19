<?php
interface Ibank {
    public function getAllBanks();
    public function getBank($bankID);
    public function addBank(Bank $bank);
    public function updateBank(Bank $bank);
    public function deleteBank($bankId);
}