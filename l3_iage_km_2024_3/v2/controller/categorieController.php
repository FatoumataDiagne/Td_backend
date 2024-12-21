<?php

class CategorieController {

    private $categorieModel;

    public function __construct($categorieModel) {
        $this->categorieModel = $categorieModel;
    }

    public function index() {
        $categories = $this->categorieModel->getAll();
        require_once './view/categorie/list.php';
    }

    public function create() {
        require_once './view/categorie/add.php';
    }

    public function save() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $libelle = $_POST['libellec'];
            if (!empty($libelle)) {
                $this->categorieModel->addCategorie($libelle);
                header('Location: index.php?controller=categorie');
            } else {
                echo "Le champ libellé est obligatoire.";
            }
        }
    }

    public function remove() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->categorieModel->deleteCategorie($id);
            header('Location: index.php?controller=categorie');
        } else {
            echo "ID manquant.";
        }
    }

    public function edit() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $categorie = $this->categorieModel->getCategorieById($id);
            require_once './view/categorie/edit.php';
        } else {
            echo "ID manquant.";
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'] ?? null;
            $libelle = $_POST['libelle'] ?? null;
            if ($id && $libelle) {
                $this->categorieModel->updateC($id, $libelle);
                header('Location: index.php?controller=categorie');
            } else {
                echo "Tous les champs sont obligatoires.";
            }
        }
    }
}

?>
