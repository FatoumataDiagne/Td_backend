
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Ajouter un Cours</h1>
        <form action="?controller=cours&action=save" method="post" class="mt-4" >
            <div class="mb-3">
                <label class="form-label">Nom :</label>
                <input type="text" name="nomc" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Code:</label>
                <input type="text" name="codec" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nombre Heure :</label>
                <input type="number" name="nbheure" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-danger">Ajouter</button>
            <a href="?controller=cours&action=show" class="btn btn-secondary">Retour</a>
        </form>
      </div>
</body>
</html>
