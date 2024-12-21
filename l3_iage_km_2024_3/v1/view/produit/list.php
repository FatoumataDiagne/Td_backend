
<body>
    <div class="container">
        <h1 class="text-center mt-4">Gestion des Produits</h1>
        <a href="?controller=produit&action=add"  class="btn btn-primary mb-3 float-end">Ajouter</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Libellé</th>
                    <th>Quantité</th>
                    <th>Prix Unitaire</th>
                    <th>Categorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produit as $p): ?>
                    <tr>
                        <td><?= $p['id'] ?></td>
                        <td><?= $p['libelle'] ?></td>
                        <td><?= $p['prix'] ?></td>
                        <td><?= $p['quantite'] ?></td>
                        <td><?= $p['libellec'] ?></td>
                        <td>
                            <a href="?controller=produit&action=edit&id=<?= $p['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="?controller=produit&action=delete&id=<?= $p['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
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


