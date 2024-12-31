
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Modifier un Client</h1>
        <form action="?controller=clients&action=update" method="post" class="mt-4" >
        <?php if ($clients) { ?>
        <div class="mb-3">
                <label class="form-label"></label>
                <input type="text" name="id" id="id" value="<?= $clients['id']?>"  class="form-control" hidden>
        </div>
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" name="nomcli" id="nomcli" value="<?= $clients['nomcli']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom:</label>
                <input type="text" name="prenomcli" id="prenomcli" value="<?= $clients['prenomcli']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" name="emailcli" id="emailcli" value="<?= $clients['emailcli']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telephone:</label>
                <input type="number" name="telcli" id="telcli" value="<?= $clients['telcli']?>"  class="form-control" required>
            </div>
           
            <?php }?>
            <button type="submit" class="btn btn-success">Modifier</button>
            <a href="?controller=clients&action=show" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
