<?php

class ProduitView {

    public function renderAddForm() {
        echo '<form action="?controller=categorie&action=save" method="post">';
        echo '    <label for="libelle">Libelle</label>';
        echo '    <input type="text" id="libelle" name="libelle"><br>';
        echo '    <label for="quantite">quantite</label>';
        echo '    <input type="text" id="quantite" name="quantite"><br>';
        echo '    <label for="prix">prix</label>';
        echo '    <input type="text" id="prix" name="prix"><br>';
        echo '    <label for="idc">categorie_id</label>';
        echo '    <input type="text" id="idc" name="idc"><br>';
        echo '    <button type="submit">Add</button>';
        echo '</form>';
    }
}
?>
