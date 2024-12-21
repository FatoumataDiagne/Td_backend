<?php

class ProduitController {

    private $produitModel;

    public function __construct($produitModel) {
        $this->produitModel = $produitModel;
    }

    public function index() {
        $produits = $this->produitModel->getAll();
        require_once './view/produit/list.php';
    }

    public function remove() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->produitModel->deleteProduit($id);
            header('Location: index.php?controller=produit');
        } else {
            echo "ID manquant.";
        }
    }

    public function create() {
        require_once './view/produit/add.php';
    }

    public function save() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $libelle = $_POST['libelle'] ?? null;
            $qt = $_POST['qt'] ?? null;
            $prix = $_POST['prix'] ?? null;
            if ($libelle && $qt && $prix) {
                $this->produitModel->addProduit($libelle, $qt, $prix);
                header('Location: index.php?controller=produit');
            } else {
                echo "Tous les champs sont obligatoires.";
            }
        }
    }
}

?>
