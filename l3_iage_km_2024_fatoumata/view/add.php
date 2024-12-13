
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Ajouter un Produit</h1>
        <form action="?action=save" method="post" class="mt-4" >
            <div class="mb-3">
                <label class="form-label">Libelle :</label>
                <input type="text" name="libelle" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Quantite :</label>
                <input type="number" name="qt" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Prix Unitaire :</label>
                <input type="number" step="0.01" name="prix" class="form-control" required>
            </div>
            <div class="mb-3">
               
                <select name="idc" id="idc"  class="form-control" required>>
                    <?php 
                    foreach ($categories as $c) {?>
                    <option value="<?=$c['id'] ;?>"> <?=$c['libellec'];?></option>
                 <?php }?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
            <a href="index.php" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
