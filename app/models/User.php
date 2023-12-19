<?php 

    class User {
        private $userID;
        private $username;
        private $userPass;
        private  Adress $Address;
        private Agency $Agency;
        public function __construct()
        {

        }

        public function getUserID() {
            return $this->userID;
        }
        public function setUserID($userID) {
            return $this->userID = $userID;
        }
        public function getUsername() {
            return $this->username;
        }
        public function setUsername($username) {
            return $this->username = $username;
        }
        public function getUserpass() {
            return $this->userPass;
        }
        public function setUserpass($userPass) {
            return $this->userPass = $userPass;
        }
        public function getAddress() {
            return $this->Address;
        }
        public function setAddress(Adress $Address) {
            return $this->Address = $Address;
        }
        public function getAgency() {
            return $this->Agency;
        }
        public function setAgency(Agency $agency) {
            return $this->Agency = $agency;
        }


    }


?>