<?php

require_once('../app/config/config.php');
require_once APP_ROOT . '/app/libs/DBConnection.php';

$controller = isset($_POST['controller']) ? $_POST['controller'] : 'home';
$action = isset($_POST['action']) ? $_POST['action'] : 'index';

if ($controller == 'home') {
    require_once APP_ROOT . '/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->index();
} else if ($controller == "addPatients") {
    require_once APP_ROOT . '/app/controllers/HomeController.php';
    $homeController = new HomeController();
    $homeController->insert($_POST['name'], $_POST['date'], $_POST['nsx']);
} else if ($controller == 'patient') {
    // require_once APP_ROOT.'/app/controllers/PatientController.php';
    // $patientController = new PatientController();
    // $patientController->index();
} else if ($controller == 'deletePatients') {
    require_once APP_ROOT . '/app/controllers/HomeController.php';
    $patientController = new HomeController();
    $patientController->delete($_POST['id']);
} else if ($controller == 'updatePatients') {
    require_once APP_ROOT . '/app/controllers/HomeController.php';
    $patientController = new HomeController();
    $patientController->update($_POST['id'], $_POST['name'], $_POST['date'], $_POST['nsx']);
} else {
    echo 'Nothing';
}
