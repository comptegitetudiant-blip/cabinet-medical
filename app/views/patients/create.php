<?php require '../app/views/layout/header.php'; ?>

<h2 class="mb-4">Ajouter un patient</h2>

<form method="post">

    <div class="mb-3">
        <label class="form-label">Nom</label>
        <input type="text" name="nom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Prénom</label>
        <input type="text" name="prenom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Date de naissance</label>
        <input type="date" name="date_naissance" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Téléphone</label>
        <input type="text" name="telephone" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">Enregistrer</button>
    <a href="index.php?page=patients" class="btn btn-secondary">Annuler</a>

</form>

<?php require '../app/views/layout/footer.php'; ?>
