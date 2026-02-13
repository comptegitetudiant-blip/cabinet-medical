<?php require '../app/views/layout/header.php'; ?>

<h2 class="mb-4">Ajouter un rendez-vous</h2>

<form method="post">

    <div class="mb-3">
        <label class="form-label">Date et heure</label>
        <input type="datetime-local" name="date_heure" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Patient</label>
        <select name="patient_id" class="form-select" required>
            <option value="">-- Choisir un patient --</option>
            <?php foreach ($patients as $patient): ?>
                <option value="<?= $patient['id'] ?>">
                    <?= $patient['prenom'] . ' ' . $patient['nom'] ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="index.php?page=rendezvous" class="btn btn-secondary">Annuler</a>

</form>

<?php require '../app/views/layout/footer.php'; ?>
