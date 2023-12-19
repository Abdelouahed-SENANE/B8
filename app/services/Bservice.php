<?php 
    include 'Ibank.php';
    class Bservice implements Ibank {
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        // add new Bank 
        public function addBank(Bank $bank) {
            
            $sql = "INSERT INTO bank VALUES (:id , :name , :logo)";
            $this->db->query($sql);
            $this->db->bind(":id",$bank->getBankID());
            $this->db->bind(":name",$bank->getBankName());
            $this->db->bind(":logo",$bank->getBankLogo());
            try {
                $this->db->execute();
                echo "Bank Added Succefully";
            } catch (PDOException $e) {
                return die('Failed to Add Bank' . $e->getMessage());
            }
        }
        // Fetch All Banks 
        public function getAllBanks()
        {
            $sql = "SELECT * FROM bank";
            $this->db->query($sql);
            try {
                $banks = $this->db->manyOjects();
                return $banks;
            } catch (PDOException $e) {
               return die("Faild to Get Banks" . $e->getMessage());
            }

        }
        public function getBank($bankID)
        {
            $sql = "SELECT * FROM bank WHERE bankID = :bankID";
            $this->db->query($sql);
            $this->db->bind(":bankID" , $bankID);
            try {
                $bank = $this->db->oneObject();
                return $bank;
            } catch (PDOException $e) {
               return ("Faild to Get Banks" . $e->getMessage());
            }
        }
        // =========== Delete BANK ============

        public function deleteBank($bankId)
        {
            $sql = "DELETE FROM bank WHERE bankID = :bankID";
            $this->db->query($sql);
            $this->db->bind(":bankID" , $bankId);
            try {
                $this->db->execute();

            } catch (PDOException $e) {
                $e = $e->getMessage();
                return $e;
            }

        }
        // =========== Update BANK ============
        public function updateBank(Bank $bank)
        {
            $sql = "UPDATE bank SET bankName = :bankName , bankLogo = :bankLogo WHERE bankID = :bankID";
            $this->db->query($sql);
            $this->db->bind(':bankName' , $bank->getBankName());
            $this->db->bind(':bankLogo' , $bank->getBankLogo());
            $this->db->bind(':bankID' , $bank->getBankID());
            try {
                $this->db->execute();
            } catch (PDOException $e) {
                $e = $e->getMessage();
                return $e;
            }
        }
        
    }



?>