
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Modifier le Produit</h1>
        <form action="?controller=produit&action=update" method="post" class="mt-4" >
            <?php
           

            if ($produit) { ?>
                <div class="mb-3">
                    <label class="form-label"></label>
                    <input type="text" name="id" value="<?= $produit['id']?>" class="form-control" hidden >
                </div>
                <div class="mb-3">
                    <label class="form-label">Libellé :</label>
                    <input type="text" name="libelle" value="<?= $produit['libelle'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Quantité :</label>
                    <input type="number" name="qt" value="<?= $produit['quantite'] ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Prix Unitaire :</label>
                    <input type="number" step="0.01" name="prix" value="<?= $produit['prix']?>" class="form-control" required>
                </div>
                <div class="mb-3">
               
               <select name="idc" id="idc"  class="form-control" required>>
                   <?php 
                   foreach ($categories as $c) {?>
                   <option value="<?=$c['id'] ;?>"> <?=$c['libellec'];?></option>
                <?php }?>
               </select>
           </div>
            <?php } else {
                echo "<p class='text-danger'>Produit non trouvé.</p>";
            } ?>
            <button type="submit" class="btn btn-warning">Modifier</button>
            <a href="?controller=produit&action=list" class="btn btn-secondary">Retour</a>
        </form>
    </div>
  
</body>
</html>
