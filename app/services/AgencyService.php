<?php
include 'AgencyInterface.php';
class AgencyService implements AgencyInterface {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function addAgency(Agency $agency){
        try {
            $sqlAdress = 'INSERT INTO adress (addressID , ville , quartier , rue , codePostal , email , phone) VALUES (:addressID , :ville , :quartier , :rue , :codePostal , :email , :phone)';
            $this->db->query($sqlAdress);
            $this->db->bind(":addressID",$agency->getAdress()->getAdressID()); 
            $this->db->bind(":ville",$agency->getAdress()->getVille()); 
            $this->db->bind(":quartier",$agency->getAdress()->getQuartier()); 
            $this->db->bind(":rue",$agency->getAdress()->getrue()); 
            $this->db->bind(":codePostal",$agency->getAdress()->getcodePostal()); 
            $this->db->bind(":email",$agency->getAdress()->getEmail());
            $this->db->bind(":phone",$agency->getAdress()->getPhone());
            $this->db->execute();

        } catch (PDOException $e) {
            return $e->getMessage();
        }

        $addressID =  $agency->getAdress()->getAdressID();


        $sql = "INSERT INTO agency (agencyID , longitude , latitude , bankID , AddressID) VALUES (:agencyID , :longitude , :latitude , :bankID , :AdressID)";
        $this->db->query($sql);
        $this->db->bind(":agencyID",$agency->getAgencyID());
        $this->db->bind(":longitude",$agency->getLongitude());
        $this->db->bind(":latitude",$agency->getLatitude());
        $this->db->bind(":bankID",$agency->getBank()->getBankID());
        $this->db->bind(":AdressID",$addressID);
        
        $this->db->execute();

    }
    public function getAllAgency()
    {
        try {
        $sql = "SELECT * FROM agency 
        JOIN adress ON agency.addressID = adress.addressID 
        JOIN bank ON agency.bankID = bank.bankID";
        $this->db->query($sql);
        $agency = $this->db->manyOjects();
        return $agency;
        } catch (PDOException $e) {
             print_r($e);
        }

    }

    }
