<?php
session_start();

require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/PatientController.php';
require_once '../app/controllers/RendezVousController.php';

$page = $_GET['page'] ?? 'login';

switch ($page) {

    case 'login':
        (new AuthController())->login();
        break;

    case 'patients':
        (new PatientController())->index();
        break;

    case 'add-patient':
        (new PatientController())->create();
        break;

    case 'delete-patient':
        (new PatientController())->delete();
        break;

    case 'rendezvous':
        (new RendezVousController())->index();
        break;

    case 'add-rdv':
        (new RendezVousController())->create();
        break;

    case 'delete-rdv':
        (new RendezVousController())->delete();
        break;

    case 'logout':
    (new AuthController())->logout();
    break;


    default:
        echo "Page introuvable";
}
