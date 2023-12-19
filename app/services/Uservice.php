
<?php 

    class Uservice implements Iuser{
        private $db;
        public function __construct()
        {
            $this->db = new Database();
        }
        public function addUser(User $user, $rolename)
        {
            try {
                $sqlAdress = 'INSERT INTO adress (addressID , ville , quartier , rue , codePostal , email , phone) VALUES (:addressID , :ville , :quartier , :rue , :codePostal , :email , :phone)';
                $this->db->query($sqlAdress);
                $this->db->bind(":addressID",$user->getAddress()->getAdressID()); 
                $this->db->bind(":ville",$user->getAddress()->getVille()); 
                $this->db->bind(":quartier",$user->getAddress()->getQuartier()); 
                $this->db->bind(":rue",$user->getAddress()->getrue()); 
                $this->db->bind(":codePostal",$user->getAddress()->getcodePostal()); 
                $this->db->bind(":email",$user->getAddress()->getEmail());
                $this->db->bind(":phone",$user->getAddress()->getPhone());
                $this->db->execute();
            } catch (PDOException $e) {
                return $e->getMessage();
            }
            $addressID = $user->getAddress()->getAdressID();
            $agencyID = $user->getAgency()->getAgencyID();
            try {
                $sqlUser = "INSERT INTO users (userID , username , userPass , addressID , agencyID) VALUES(:userID , :username , :userPass , :addressID , :agencyID)";
                $this->db->query($sqlUser);
                $this->db->bind(":userID", $user->getUserID());
                $this->db->bind(":username", $user->getUsername());
                $this->db->bind(":userPass", $user->getUserpass());
                $this->db->bind(":addressID", $addressID);
                $this->db->bind(":agencyID", $agencyID);
                $this->db->execute();

            } catch (PDOException $e) {
                return $e->getMessage();
            }

            try {
                $sqlRoleofUser = "INSERT INTO roleofuser VALUES (:roleName , :userID)";
                $this->db->query($sqlRoleofUser);
                $this->db->bind(":roleName", $rolename);
                $this->db->bind(":userID", $user->getUserID());
                $this->db->execute();
            } catch (PDOException $e) {
                return $e->getMessage();
            }


        }

        public function fetchAllUser()
        {
            $sql = "SELECT * FROM users JOIN adress on users.addressID = adress.addressID";
            $this->db->query($sql);
            try {
                $users = $this->db->manyOjects();
                return $users;
            } catch (PDOException $e) {
                print_r($e);
            }
        }

        public function deleteUser($userID){

            $sql = "DELETE FROM users WHERE userID = :userID";
            $this->db->query($sql);
            try {
                $this->db->bind(":userID" , $userID);
                $this->db->execute();
            } catch (PDOException $e) {
                print_r($e);
            }


        }
        public function fetchUserById($userID){
            $sql = "SELECT * FROM users JOIN adress ON users.addressID = adress.addressID 
                    JOIN roleofuser ON users.userID = roleOfuser.userID
                    JOIN agency ON users.agencyID = agency.agencyID
                    WHERE users.userID = :userID";
            $this->db->query($sql);
            $this->db->bind(":userID" , $userID);
            try {
            $user = $this->db->oneObject();
            return $user;    
            } catch (PDOException $e) {
                print_r($e);
            }
        }


        public function updateUser(User $user) {
            try {
            // Start a transaction

            // Update address table
            $sql1 = "UPDATE adress
                    SET ville = :ville, quartier = :quartier, rue = :rue, codePostal = :codePostal, email = :email, phone = :phone
                    WHERE addressID = :addressID";

            $this->db->query($sql1);
            $this->db->bind(":ville", $user->getAddress()->getVille());
            $this->db->bind(":quartier", $user->getAddress()->getQuartier());
            $this->db->bind(":rue", $user->getAddress()->getRue());
            $this->db->bind(":codePostal", $user->getAddress()->getCodePostal());
            $this->db->bind(":email", $user->getAddress()->getEmail());
            $this->db->bind(":phone", $user->getAddress()->getPhone());
            $this->db->bind(":addressID", $user->getAddress()->getAdressID());
            $this->db->execute();

            // Update users table
            $sql2 = "UPDATE users
                    SET username = :username, userPass = :userPass
                    WHERE addressID = :addressID";

            $this->db->query($sql2);
            $this->db->bind(":username", $user->getUsername());
            $this->db->bind(":userPass", $user->getUserpass());
            $this->db->bind(":addressID", $user->getAddress()->getAdressID());
            $this->db->execute();
                print_r("Hello");
                die();
            // Commit the transaction
            } catch (PDOException $e) {
                print_r($e);
            }






        }



    }



?>