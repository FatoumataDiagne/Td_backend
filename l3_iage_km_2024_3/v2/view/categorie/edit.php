
<?php

public function renderEditForm($categorie) {
        if ($categorie) {
            echo '<form action="?controller=categorie&action=update" method="post">';
            echo '    <input type="hidden" name="id" value="' . $categorie['id'] . '">';
            echo '    <label for="libelle">Libelle</label>';
            echo '    <input type="text" id="libelle" name="libelle" value="' . $categorie['libelle'] . '"><br>';
            echo '    <button type="submit">Edit</button>';
            echo '</form>';
        }
    }
    ?>