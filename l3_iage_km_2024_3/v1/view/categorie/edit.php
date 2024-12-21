
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Modifier une Categorire</h1>
        <form action="?controller=categorie&action=update" method="post" class="mt-4" >
        <?php if ($categorie) { ?>
        <div class="mb-3">
                <label class="form-label"></label>
                <input type="text" name="id" id="id" value="<?= $categorie['id']?>"  class="form-control" hidden>
        </div>
            <div class="mb-3">
                <label class="form-label">Libellé :</label>
                <input type="text" name="libelle" id="libelle" value="<?= $categorie['libellec']?>"  class="form-control" required>
            </div>
           
            <?php }?>
            <button type="submit" class="btn btn-success">Modifier</button>
            <a href="?controller=categorie&action=list" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
