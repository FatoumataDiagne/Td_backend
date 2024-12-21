<html>
<body>
<div class="container col-6">
        <h1 class="text-center mt-4">Ajouter un Utilisateur</h1>
        <form action="?controller=utilisateur&action=save" method="post" class="mt-4" >
                    <div class="mb-3">
                            <label for="">Nom</label>
                            <input type="text" name="nom" class="form-control">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" class="form-control">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control">
                            <label for="">mot de passe</label>
                            <input type="text" name="mdp" class="form-control">
                            <div class="modal-footer">
                                <a href="?controller=utilisateur&action=list" class="btn btn-secondary" data-bs-dismiss="modal">Retour</a>
                                <button type="submit" name="ajoutUser" class="btn btn-primary">Ajouter </button>
                            </div>
                            </div>
                    </form>

</div>
</body>
</html>
