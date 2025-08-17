<?php
class Client {
	private $id ;
	private $levl ;
	private $name ;
	private $exp;
	private $language ;
	private $email ;
	private $password ;
	private $photo ;
	public function __construct($data,) {
		$this->id = $data['id'];
		$this->name = $data['name'];
		$this->exp = $exp['exp'];
		$this->levl = $data['levl'];
		$this->language=$data['language'];
        $this->email=$data['email'];
		$this->password = $data['password'];
		$this->photo = $data['url_photo'];
	}
	public function getName() {
		return $this->name;
	}
	public function getExp() {
		return $this->exp;
	}
	public function getLevel() {
		return $this->levl;
	}
	public function getLanguage() {
		return $this->language;
	}
	public function setLanguage($language) {
		$this->language = $language;
	}
	public function setExp($exp) {
		$this->exp = $exp;
	}
	public function setLevel($levl) {
		$this->levl = $levl;
	}
	public function getId() {
		return $this->id;
	}
	public function getEmail() {
		return $this->email;
	}
	public function getPassword() {
		return $this->password;
	}
	public function getPhoto() {
		return $this->photo;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function setEmail($email) {
		$this->email = $email;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
	public function setPhoto($photo) {
		$this->photo = $photo;
	}
	public function set_all($db){
	$db->updateval($this->name, $this->exp, $this->levl, $this->language 
		, $this->email, $this->password, $this->photo, $this->id);
	}
}
?>
