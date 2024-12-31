<html>
<body>
    <div class="container">
        <h1 class="text-center mt-4">Gestion des Clients</h1>
        <a href="?controller=clients&action=add" class="btn btn-primary mb-3 float-end">Ajouter</a>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Telephone</th>
                  
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($clients as $c) { ?>
        <tr>
            <td><?= $c['id'] ?></td>
            <td><?= $c['nomcli'] ?></td>
            <td><?= $c['prenomcli'] ?></td>
            <td><?= $c['emailcli'] ?></td>
            <td><?= $c['telcli'] ?></td>
            <td>
                <a href="?controller=clients&action=edit&id=<?= $c['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                <a href="?controller=clients&action=delete&id=<?= $c['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
            </td>
        </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>

</body>
</html>

