<?php require '../app/views/layout/header.php'; ?>

<h2 class="mb-4">Liste des rendez-vous</h2>

<a href="index.php?page=add-rdv" class="btn btn-primary mb-3">
    Ajouter un rendez-vous
</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Patient</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($rendezvous as $rdv): ?>
            <tr>
                <td><?= $rdv['prenom'] . ' ' . $rdv['nom'] ?></td>
                <td><?= $rdv['date_heure'] ?></td>
                <td>
                    <a href="index.php?page=delete-rdv&id=<?= $rdv['id'] ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Supprimer ce rendez-vous ?')">
                       Supprimer
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require '../app/views/layout/footer.php'; ?>
