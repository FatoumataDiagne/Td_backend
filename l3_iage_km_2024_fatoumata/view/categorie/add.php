
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Ajouter une Categorire</h1>
        <form action="?action=savec" method="post" class="mt-4" >
            <div class="mb-3">
                <label class="form-label">Libellé :</label>
                <input type="text" name="libelle" id="libelle" class="form-control" required>
            </div>
           
            
            <button type="submit" class="btn btn-success">Ajouter</button>
            <a href="index.php" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
