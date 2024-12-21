<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <h1 class="text-center mt-4">Gestion des utilisateurs</h1>
        <a href="?controller=utilisateur&action=add"  class="btn btn-primary mb-3 float-end">Ajouter</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>mot de passe</th>     
                    <th>Action(s)</th>
                </tr>
            </thead>
            <tbody>

                <?php while($u = pg_fetch_assoc($utilisateur)){?>
                   <tr>
                        <td> <?= $u['id']; ?> </td>
                        <td> <?= $u['nom']; ?> </td>
                        <td> <?= $u['prenom']; ?> </td>
                        <td> <?= $u['email']; ?> </td>
                        <td> <?= $u['mdp']; ?> </td>
                        
                        <td>
                        <a href="?controller=utilisateur&action=edit&id=<?= $u['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="?controller=utilisateur&action=delete&id=<?= $u['id'] ?>" class="btn btn-danger btn-sm">Suprimer</a>
                        
                        </td>
                   </tr>
                <?php } ?>

                   
            </tbody>
        </table>


</div>
</body>
</html>



