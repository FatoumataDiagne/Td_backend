
<body>
    <div class="container">
        <h1 class="text-center mt-4">Gestion des Cours</h1>
        <a href="?controller=cours&action=add"  class="btn btn-primary mb-3 float-end">Ajouter</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Code</th>
                    <th>Nombre heures</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while($c = pg_fetch_assoc($cours)){?>
                <tr>
                        <td><?= $c['id'] ?></td>
                        <td><?= $c['nomc'] ?></td>
                        <td><?= $c['codec'] ?></td>
                        <td><?= $c['nbheure'] ?></td>
                        <td>
                            <a href="?controller=cours&action=edit&id=<?= $c['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="?controller=cours&action=delete&id=<?= $c['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                <?php }; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDelete(url) {
            if (confirm('Voulez-vous vraiment supprimer ce produit ?')) {
                window.location.href = url;
            }
        }
    </script>
</body>
</html>


