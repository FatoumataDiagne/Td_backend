
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Modifier un Etudiant</h1>
        <form action="?controller=etudiants&action=update" method="post" class="mt-4" >
        <?php if ($etudiants) { ?>
        <div class="mb-3">
                <label class="form-label"></label>
                <input type="text" name="id" id="id" value="<?= $etudiants['id']?>"  class="form-control" hidden>
        </div>
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" name="nom" id="nom" value="<?= $etudiants['nom']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom :</label>
                <input type="text" name="prenom" id="prenom" value="<?= $etudiants['prenom']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" name="email" id="email" value="<?= $etudiants['email']?>"  class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Filiere :</label>
                <input type="text" name="filiere" id="filiere" value="<?= $etudiants['filiere']?>"  class="form-control" required>
            </div>
           
            <?php }?>
            <button type="submit" class="btn btn-success">Modifier</button>
            <a href="?controller=etudiants&action=show" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
