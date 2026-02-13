<?php
require_once '../app/models/Database.php';

class PatientController {

    public function index() {
        $db = Database::connect();
        $stmt = $db->query("SELECT * FROM patients ORDER BY nom ASC");
        $patients = $stmt->fetchAll();

        require '../app/views/patients/index.php';
    }

    public function create() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $db = Database::connect();

            $stmt = $db->prepare("
                INSERT INTO patients (nom, prenom, date_naissance, telephone)
                VALUES (?, ?, ?, ?)
            ");

            $stmt->execute([
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['date_naissance'],
                $_POST['telephone']
            ]);

            header("Location: index.php?page=patients");
            exit;
        }

        require '../app/views/patients/create.php';
    }

    public function delete() {

        if (!isset($_GET['id'])) {
            header("Location: index.php?page=patients");
            exit;
        }

        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM patients WHERE id = ?");
        $stmt->execute([$_GET['id']]);

        header("Location: index.php?page=patients");
        exit;
    }
}
