<?php require '../app/views/layout/header.php'; ?>

<h2 class="mb-4">Liste des patients</h2>

<a href="index.php?page=add-patient" class="btn btn-success mb-3">
    Ajouter un patient
</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>Téléphone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?= $patient['nom'] ?></td>
                <td><?= $patient['prenom'] ?></td>
                <td><?= $patient['date_naissance'] ?></td>
                <td><?= $patient['telephone'] ?></td>
                <td>
                    <a href="index.php?page=delete-patient&id=<?= $patient['id'] ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Supprimer ce patient ?')">
                       Supprimer
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require '../app/views/layout/footer.php'; ?>
