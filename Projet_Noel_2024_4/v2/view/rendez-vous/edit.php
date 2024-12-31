<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un rendez-vous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container col-6">
        <h1 class="text-center mt-4">Modifier un rendez-vous</h1>
        <form action="?controller=rendez-vous&action=update" method="post" class="mt-4">
            <?php if (!empty($rv)) { ?>
                <div class="mb-3">
                    <label class="form-label"></label>
                    <input type="number" name="id" id="id" value="<?= $rv['id'] ?? ''; ?>" class="form-control" hidden>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date :</label>
                    <input type="date" name="dates" id="dates" value="<?= $rv['dates'] ?? ''; ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Heure:</label>
                    <input type="text" name="heure" id="heure" value="<?= $rv['heure'] ?? ''; ?>" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descriptions :</label>
                    <input type="text" name="descriptions" id="descriptions" value="<?= $rv['descriptions'] ?? ''; ?>" class="form-control" required>
                </div>
            <div class="mb-3">
                <label class="form-label">Client</label>
               <select name="client" type="text"  class="form-control" required>
                   <?php foreach ($clients as $c) {?>
                   <option value="<?=$c['id'] ;?>"> <?=$c['nomcli'];?></option>
                    <?php }?>
                </select>
            </div>

            <?php } ?>
            <button type="submit" class="btn btn-success">Modifier</button>
            <a href="?controller=rendez-vous" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
