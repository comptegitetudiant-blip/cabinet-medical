<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cabinet Médical</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">

        <a class="navbar-brand" href="index.php?page=patients">
            Cabinet Médical
        </a>

        <div class="collapse navbar-collapse">

            <?php if (isset($_SESSION['user'])): ?>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=patients">
                            Patients
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=rendezvous">
                            Rendez-vous
                        </a>
                    </li>

                </ul>

                <span class="navbar-text me-3">
                    Connecté : <?= $_SESSION['user']['email'] ?>
                </span>

                <a href="index.php?page=logout" class="btn btn-light btn-sm">
                    Déconnexion
                </a>

            <?php endif; ?>

        </div>
    </div>
</nav>

<div class="container mt-4">
