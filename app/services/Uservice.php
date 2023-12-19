
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







    }



?>