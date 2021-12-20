<?php
class customers{
    private $CustomersID;
    private $Username;
    private $Password;
    private $FullName;
    private $Email;
    private $Phone;
    private $IDCard;
    private $Status;

    public function __construct(){}

    public function init($CustomersID,$Username, $Password, $Fullname,$Email, $Phone)
    {
        $this->CustomersID = $CustomersID;
        $this->Username = $Username;
        $this->PasswORd = $Password;
        $this->Fullname = $Fullname;
        $this->Email = $Email;
        $this->Phone = $Phone;
    
    }
    public static function add($cus)
    {
        $conn = createDBConnection();
        $sql = sprintf(
            "INSERT INTO `customers` (`Username`,`Password`,`Email`,`Phone` ) 
        VALUES ('%s', '%s', '%s', '%s')
        ",
            $cus->Username,
            $cus->Email,
            $cus->Phone,
            $cus->Password,
        );
        if ($conn->query($sql) === TRUE) {
            closeDb($conn);
            return true;
        } else {
            closeDb($conn);
            return false;
        }
    }

    public function setCustomersID($CustomersID){
        $this->CustomersID = $CustomersID;
    }
    public function getCustomersID(){ 
        return $this->CustomersID;
    }
    public function setUsername($Username){
        $this->Username = $Username;
    }
    public function getUsername(){ 
        return $this->Username;
    }
    public function setPassword($Password){
        $this->Password = $Password;
    }
    public function getPassword(){ 
        return $this->Password;
    }
    public function setFullname($Fullname){
        $this->Fullname = $Fullname;
    }
    public function getFullname(){
        return $this->Fullname;
    } 
    Public function setEmail($Email){
        $this->Email = $Email;
    }
    public function getEmail(){
        return $this->Email;
    }
    public function setPhone($Phone){
        $this->Phone = $Phone;
    }
    public function getPhone(){
        return $this->Phone;
    }
       
    
    // public function getUsername($Username){ 
    // $conn = createDBConnection();
    //     $sql = "SELECT * FROM `customers` WHERE `Username` =" . $Username . "";
    //     $result = $conn->query($sql);
    //     if ($result->num_rows > 0) {
    //         $row = $result->fetch_assoc();
    //         $cus = new customers();
    //         $cus->init($row['CustomerID'],$row['Username'], $row['Password'], $row['Fullname'], $row['Email'], $row['Phone']);
    //         closeDb($conn);
    //         return $cus;
    //     } else {
    //         closeDb($conn);
    //         return null;
    //     }
    // }
    


}
?>