<?php
require_once '../app/models/Database.php';

class AuthController {

    public function login() {

        $error = null;
        $submitted = false;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $submitted = true;

            $db = Database::connect();
            $stmt = $db->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$_POST['email']]);
            $user = $stmt->fetch();

            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                header('Location: index.php?page=patients');
                exit;
            } else {
                $error = "Identifiants incorrects";
            }
        }

        require '../app/views/auth/login.php';
    }

    public function logout() {
    session_destroy();
    header("Location: index.php?page=login");
    exit;
}

}
