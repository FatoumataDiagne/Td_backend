<html>
<body>
    <div class="container ">
        <h1 class="text-center mt-4">Gestion des Etudiants</h1>
        <a href="?controller=etudiants&action=add" class="btn btn-primary mb-3 float-end">Ajouter</a>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Filiere</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while($e = pg_fetch_assoc($etudiants)){?>
                    <tr>
                    <td><?= $e['id'] ?></td>
                    <td><?= $e['nom'] ?></td>
                    <td><?= $e['prenom'] ?></td>
                    <td><?= $e['email'] ?></td>
                    <td><?= $e['filiere'] ?></td>

                    <td>
                            <a href="?controller=etudiants&action=edit&id=<?= $e['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="?controller=etudiants&action=delete&id=<?= $e['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>

</body>
</html>

