<html>
<body>
    <div class="container col-6 mx-auto ">
        <h1 class="text-center mt-4">Gestion des Categories</h1>
        <a href="?controller=categorie&action=add" class="btn btn-primary mb-3 float-end">Ajouter</a>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Libellé</th>
                  
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while($c = pg_fetch_assoc($categories)){?>
                    <tr>
                    <td><?= $c['id'] ?></td>
                    <td><?= $c['libellec'] ?></td>
                    <td>
                            <a href="?controller=categorie&action=edit&id=<?= $c['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="?controller=categorie&action=delete&id=<?= $c['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>

</body>
</html>

