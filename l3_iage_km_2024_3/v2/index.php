<?php

require_once './model/db.php';

class App
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
        $this->database->get_Connexion();
    }

    public function run()
    {
        $controllerName = isset($_GET["controller"]) ? ucfirst($_GET["controller"]) . "Controller" : "CategorieController";
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        $controllerFile = "./controller/{$controllerName}.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            if (class_exists($controllerName)) {
                $controller = new $controllerName();

                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    echo "Action '{$action}' non trouvee dans le controleur '{$controllerName}'.";
                }
            } else {
                echo "Classe controleur '{$controllerName}' non trouvee.";
            }
        } else {
            echo "Fichier controleur '{$controllerFile}' introuvable.";
        }
    }
}


$app = new App();
$app->run();

?>