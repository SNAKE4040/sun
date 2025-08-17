<?php
header("db.php");
class action {
    private $bd ;
    public function __construct($db){
        $bd=$db->getconnection();
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
    public function checuser($email) {
        $sql = "SELECT * FROM client WHERE email=:email";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function add_user($name, $exp, $levl, $language, $email, $password, $photo) {
        $sql = "INSERT INTO client (name, exp, levl, language, email, password, url_photo) VALUES (:name, :exp, :levl, :language, :email, :password, :photo)";
        $stmt = $this->bd->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':exp', $exp);
        $stmt->bindParam(':levl', $levl);
        $stmt->bindParam(':language', $language);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':photo', $photo);
        
        return $stmt->execute();
    }
    public function getAllUsers() {
        $sql = "SELECT * FROM client";
        $stmt = $this->bd->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

};