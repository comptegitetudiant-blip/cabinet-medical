<?php
require_once '../app/models/Database.php';

class RendezVousController {

    public function index() {

        $db = Database::connect();

        $stmt = $db->query("
            SELECT r.id, r.date_heure, p.nom, p.prenom
            FROM rendez_vous r
            JOIN patients p ON r.patient_id = p.id
            ORDER BY r.date_heure ASC
        ");

        $rendezvous = $stmt->fetchAll();

        require '../app/views/rendezvous/index.php';
    }

    public function create() {

        $db = Database::connect();
        $patients = $db->query("SELECT * FROM patients ORDER BY nom ASC")->fetchAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $stmt = $db->prepare("
                INSERT INTO rendez_vous (date_heure, patient_id)
                VALUES (?, ?)
            ");

            $stmt->execute([
                $_POST['date_heure'],
                $_POST['patient_id']
            ]);

            header("Location: index.php?page=rendezvous");
            exit;
        }

        require '../app/views/rendezvous/create.php';
    }

    public function delete() {

        if (!isset($_GET['id'])) {
            header("Location: index.php?page=rendezvous");
            exit;
        }

        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM rendez_vous WHERE id = ?");
        $stmt->execute([$_GET['id']]);

        header("Location: index.php?page=rendezvous");
        exit;
    }
}
