
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Modifier le Cours</h1>
        <form action="?controller=cours&action=update" method="post" class="mt-4" >
            <?php
           

            if ($cours) { ?>
                <div class="mb-3">
                    <label class="form-label"></label>
                    <input type="text" name="id" value="<?= $cours['id']?>" class="form-control" hidden >
                </div>
                <div class="mb-3">
                    <label class="form-label">Nom :</label>
                    <input type="text" name="nomc" value="<?= $cours['nomc'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Code :</label>
                    <input type="text" name="codec" value="<?= $cours['codec'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre heures :</label>
                    <input type="text" name="nbheure" value="<?= $cours['nbheure']?>" class="form-control" required>
                </div>
            <?php } else {
                echo "<p class='text-danger'>Produit non trouvé.</p>";
            } ?>
            <button type="submit" class="btn btn-warning">Modifier</button>
            <a href="?controller=cours&action=show" class="btn btn-secondary">Retour</a>
        </form>
    </div>
  
</body>
</html>
