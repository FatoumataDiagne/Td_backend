<?php

class CategorieView {

    public function renderAddForm() {
        echo '<form action="?controller=categorie&action=save" method="post">';
        echo '    <label for="libelle">Libelle</label>';
        echo '    <input type="text" id="libelle" name="libelle"><br>';
        echo '    <button type="submit">Add</button>';
        echo '</form>';
    }
}
?>


