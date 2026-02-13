<?php require '../app/views/layout/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-body">

                <h4 class="text-center mb-4">Connexion</h4>

                <?php if ($submitted && $error): ?>
                    <div class="alert alert-danger"><?= $error ?></div>
                <?php endif; ?>

                <form method="post">
                    <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
                    <input type="password" name="password" class="form-control mb-3" placeholder="Mot de passe" required>
                    <button class="btn btn-primary w-100">Se connecter</button>
                </form>

            </div>
        </div>
    </div>
</div>

<?php require '../app/views/layout/footer.php'; ?>
