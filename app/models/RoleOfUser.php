<?php

    class RoleOfUser{
        private $roleName;
        private User $user;

        public function __construct()
        {
            
        }

        public function getRoleName() {
            return $this->roleName;
        }
        public function setRoleName($roleName) {
            return $this->roleName = $roleName;
        }
        public function getUser() {
            return $this->user;
        }
        public function setUser(User $user) {
            return $this->user = $user;
        }

    }

?>