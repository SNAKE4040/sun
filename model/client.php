<?php
class Client {
	private $id;
	private $levl;
	private $name;
	private $exp;
	private $language;
	private $email;
	private $password;
	private $photo;

	public function __construct($data) {
		$this->id = $data['id'];
		$this->name = $data['name'];
		$this->exp = json_decode($data['exp'], true);
		$this->levl = json_decode($data['levl'], true);
		$this->language = json_decode($data['language'], true);
		$this->email = $data['email'];
		$this->password = $data['password'];
		$this->photo = $data['photo_url'];
		$this->exp = $this->convert_data($this->exp);
		$this->levl = $this->convert_data($this->levl);
	}

	private function convert_data($att) {
		if (!is_array($att)) return [];
		foreach ($att as $key => $value) {
			$att[$key] = (int)$value;
		}
		return $att;
	}

	public function getId() {
		return $this->id;
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
	public function set_all($db) {
		$db->updateval(
			$this->name,
			$this->exp,
			$this->levl,
			$this->language,
			$this->email,
			$this->password,
			$this->photo,
			$this->id
		);
	}
}
?>
