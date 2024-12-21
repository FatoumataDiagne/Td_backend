
<?php
public function renderList($produit) {
        echo '<a href="?controller=categorie&action=add">Add Categorie</a>';
        echo '<table>';
        echo '    <thead>';
        echo '        <tr>';
        echo '            <th>ID</th>';
        echo '            <th>Libelle</th>';
        echo '            <th>quantite</th>';
        echo '            <th>prix</th>';
        echo '            <th>categorie_id</th>';
        echo '            <th>Actions</th>';
        echo '        </tr>';
        echo '    </thead>';
        echo '    <tbody>';

        while ($p = pg_fetch_assoc($produit)) {
            echo '        <tr>';
            echo '            <td>' . $p['id'] . '</td>';
            echo '            <td>' . $p['libelle'] . '</td>';
            echo '            <td>' . $p['quantite'] . '</td>';
            echo '            <td>' . $p['prix'] . '</td>';
            echo '            <td>' . $p['idc'] . '</td>';
            echo '            <td>';
            echo '                <a href="?controller=categorie&action=delete&id=' . $p['id'] . '">Delete</a>';
            echo '                <a href="?controller=categorie&action=edit&id=' . $p['id'] . '">Update</a>';
            echo '            </td>';
            echo '        </tr>';
        }

        echo '    </tbody>';
        echo '</table>';
    }

?>
