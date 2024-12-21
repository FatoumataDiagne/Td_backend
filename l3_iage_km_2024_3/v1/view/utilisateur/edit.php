
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Modifier un Utilisateur</h1>
        <form action="?controller=utilisateur&action=update" method="post" class="mt-4" >
        <?php if ($utilisateur) { ?>
        <div class="mb-3">
                <label class="form-label"></label>
                <input type="text" name="id" id="id" value="<?= $utilisateur['id']?>"  class="form-control" hidden>
        </div>
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" name="nom" id="nom" value="<?= $utilisateur['nom']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom :</label>
                <input type="text" name="prenom" id="prenom" value="<?= $utilisateur['prenom']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" name="email" id="email" value="<?= $utilisateur['email']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">MDP :</label>
                <input type="text" name="mdp" id="mdp" value="<?= $utilisateur['mdp']?>"  class="form-control" required>
            </div>
            <?php }?>
            <button type="submit" class="btn btn-success">Modifier</button>
            <a href="?controller=utilisateur&action=list" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
