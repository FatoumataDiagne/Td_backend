
<?php
public function renderList($categories) {
        echo '<a href="?controller=categorie&action=add">Add Categorie</a>';
        echo '<table>';
        echo '    <thead>';
        echo '        <tr>';
        echo '            <th>ID</th>';
        echo '            <th>Libelle</th>';
        echo '            <th>Actions</th>';
        echo '        </tr>';
        echo '    </thead>';
        echo '    <tbody>';

        while ($p = pg_fetch_assoc($categories)) {
            echo '        <tr>';
            echo '            <td>' . $p['id'] . '</td>';
            echo '            <td>' . $p['libelle'] . '</td>';
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
