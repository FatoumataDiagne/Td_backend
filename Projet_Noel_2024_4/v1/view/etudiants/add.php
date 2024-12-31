<html>
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Ajouter un Etudiant</h1>
        <form action="?controller=etudiants&action=save" method="post" class="mt-4" >
        <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" name="nom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom :</label>
                <input type="text" name="prenom" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email :</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Filiere :</label>
                <input type="text" name="filiere" class="form-control" required>
            </div>
           
            
            <button type="submit" class="btn btn-success">Ajouter</button>
            <a href="?controller=etudiants&action=show" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
