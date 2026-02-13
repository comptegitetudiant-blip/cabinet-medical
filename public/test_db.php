<?php
require_once '../app/models/Database.php';

$db = Database::getConnection();
echo "Connexion BDD OK";
