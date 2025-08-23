<?php
class Cours {
    private array $cour;

    public function __construct(PDO $db) {
        $stmt = $db->prepare("SELECT * FROM cours");
        $stmt->execute();
        $this->cour = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function get_cour(): array {
        return $this->cour;
    }
}
?>