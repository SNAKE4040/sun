<?php
class Client {
	private $levl ;
	private $name ;
	private $exp;
	private $language ;
	public function __construct($data,) {
		$this->name = $data['name'];
		$this->exp = $exp['exp'];
		$this->levl = $data['levl'];
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
	public function set_all($db){
	$db->updateval($this->name, $this->exp, $this->levl, $this->language);
	}
}
?>
