<html>
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Ajouter un client</h1>
        <form action="?controller=clients&action=save" method="post" class="mt-4" >
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" name="nomcli" id="nomcli" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom:</label>
                <input type="text" name="prenomcli" id="prenomcli" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="text" name="emailcli" id="emailcli" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telephone :</label>
                <input type="number" name="telcli" id="telcli" class="form-control" required>
            </div>
           
            
            <button type="submit" class="btn btn-success">Ajouter</button>
            <a href="?controller=clients&action=show" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
