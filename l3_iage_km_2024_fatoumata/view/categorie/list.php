
<body>
    <div class="container col-6 mx-auto ">
        <h1 class="text-center mt-4">Gestion des Categories</h1>
        <a href="?action=addCategorie" class="btn btn-primary mb-3 float-end">Ajouter</a>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Libellé</th>
                  
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $c): ?>
                    <tr>
                        <td><?= $c['id'] ?></td>
                        <td><?= $c['libellec'] ?></td>
                      
                        <td>
                            <a href="?action=editCategorie&id=<?= $c['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="?action=deleteCategorie&id=<?= $c['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
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