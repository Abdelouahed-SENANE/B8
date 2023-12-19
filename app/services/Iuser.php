<?php 

    interface Iuser {

        public function addUser(User $user , $rolename);
        public function updateUser(User $user );
        public function deleteUser($userID);
        public function fetchAllUser();
        public function fetchUserById($userID);

    }
?>