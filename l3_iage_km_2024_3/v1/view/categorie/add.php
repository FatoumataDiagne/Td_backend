<html>
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Ajouter une Categories</h1>
        <form action="?controller=categorie&action=save" method="post" class="mt-4" >
            <div class="mb-3">
                <label class="form-label">Libellé :</label>
                <input type="text" name="libellec" id="libellec" class="form-control" required>
            </div>
           
            
            <button type="submit" class="btn btn-success">Ajouter</button>
            <a href="?controller=categorie&action=list" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
