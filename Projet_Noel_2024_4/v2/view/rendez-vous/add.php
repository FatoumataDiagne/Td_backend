
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Ajouter un Rendez-vous</h1>
        <form action="?controller=rendez-vous&action=save" method="post" class="mt-4" >
            <div class="mb-3">
                <label class="form-label">Date :</label>
                <input type="date" name="dates" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Heure:</label>
                <input type="text" name="heure" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Descriptions :</label>
                <input type="text" name="descriptions" class="form-control" required>
            </div>
            <div class="mb-3">
            <label class="form-label">Client :</label>
                <select name="client" type="number"  class="form-control"  required>
                    <?php 
                    foreach ($clients as $c) {?>
                    <option value="<?=$c['id'] ;?>"> <?=$c['nomcli'];?></option>
                 <?php }?>
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Ajouter</button>
            <a href="?controller=rendez-vous" class="btn btn-secondary">Retour</a>
        </form>
      </div>
</body>
</html>
