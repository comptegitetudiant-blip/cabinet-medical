<?php
require_once 'Database.php';

class Patient {

    public static function all() {
        $db = Database::connect();
        return $db->query("SELECT * FROM patients ORDER BY nom")->fetchAll();
    }

    public static function create($data) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO patients (nom, prenom, date_naissance)
             VALUES (?, ?, ?)"
        );
        $stmt->execute([
            $data['nom'],
            $data['prenom'],
            $data['date_naissance']
        ]);
    }
}
