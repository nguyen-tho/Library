<?php
class customers{
    private $CustomersID;
    private $username;
    private $password;
    private $fullName;
    private $email;
    private $phone;
    private $IDCard;
    private $status;

    public function __construct(){}

    public function setCustomersID($customersID){
        $this->customersID = $customersID;
    }
    public function getCustomersID(){ 
        return $this->customersID;
    }

    public function setUsername($username){
        $this->username = $username;
    }
    public function getUsername(){ 
        return $this->username;
    }
    
}
?>