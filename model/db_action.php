<?php
require_once("db.php");

class action {
    private $bd ;
    public function __construct($db){
        $this->bd=$db->getconnection();
    }
    public function updateval($name, $exp, $levl, $language, $email, $password, $photo, $id) {
        $sql = "UPDATE client SET name=:name, exp=:exp, levl=:levl, language=:language, email=:email, password=:password, url_photo=:photo WHERE id=:id";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':exp', $exp);
        $stmt->bindParam(':levl', $levl);
        $stmt->bindParam(':language', $language);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':photo', $photo);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
    public function get_data($id) {
        $sql = "SELECT * FROM client WHERE id=:id";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function delete($id) {
        $sql = "DELETE FROM client WHERE id=:id";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
    public function checuser($email, $password) {
        $sql = "SELECT * FROM client WHERE email=:email AND password=:password";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function add_user($name, $email, $password) {
        $sql = "INSERT INTO client (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }
    public function getAllUsers() {
        $sql = "SELECT * FROM client";
        $stmt = $this->bd->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
   public function cheque_admin($email, $finger) {
       $sql = "SELECT * FROM admins WHERE name=:name AND JSON_CONTAINS(email, :finger)";
       $stmt = $this->bd->prepare($sql);
       $stmt->bindParam(':name', $email);
       $fingerJson = json_encode($finger);
       $stmt->bindParam(':finger', $fingerJson);
       $stmt->execute();

       if ($stmt->rowCount() > 0) {
           return $stmt->fetch(PDO::FETCH_ASSOC);
       } else {
           $sql = "SELECT * FROM admins WHERE name=:email";
           $stmt = $this->bd->prepare($sql);
           $stmt->bindParam(':email', $email);
           $stmt->execute();

           if ($stmt->rowCount() > 0) {
               return "admin";
           } else {
               return false;
           }
       }
   }
};
?>