
<body>
    <div class="container">
        <h1 class="text-center mt-4">Gestion des rendez-vous</h1>
        <a href="?controller=rendez-vous&action=add"  class="btn btn-primary mb-3 float-end">Ajouter</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Descriptions</th>
                    <th>Client</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rv as $r): ?>
                    <tr>
                        <td><?= $r['id'] ?></td>
                        <td><?= $r['dates'] ?></td>
                        <td><?= $r['heure'] ?></td>
                        <td><?= $r['descriptions'] ?></td>
                        <td>
                            <?= ($r['nomcli'] ?? 'Inconnu'); ?>
                            <?= ($r['prenomcli'] ?? ' '); ?>
                    
                        </td>
                        
                        <td>
                            <a href="?controller=rendez-vous&action=edit&id=<?= $r['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="?controller=rendez-vous&action=delete&id=<?= $r['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDelete(url) {
            if (confirm('Voulez-vous vraiment supprimer ce rendez-vous ?')) {
                window.location.href = url;
            }
        }
    </script>
</body>
</html>


