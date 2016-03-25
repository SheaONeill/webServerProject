<?php

//start session
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use Itb\MainController;
use Itb\AdminController;
use Itb\LoginController;


define('DB_HOST', 'localhost');
define('DB_USER', 'JavaBeanz');
define('DB_PASS', 'coffee');
define('DB_NAME', 'itb');



$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
$mainController = new MainController();
$adminController = new AdminController();
$loginController = new LoginController();

switch ($action){
    //---------- ADMIN ROUTES ---------------
    case 'adminCodes':
        $adminController->adminCodesAction();
        break;

    case 'adminHome':
        $adminController->adminHomeAction();
        break;

    //---------- login ROUTES ---------------
    case 'logout':
        $loginController->logoutAction();
        break;

    case 'processLogin':
        $loginController->processLoginAction();
        break;


    //---------- main ROUTES ---------------
    case 'login':
        $mainController->loginAction();
        break;

    case 'history':
        $mainController->historyAction();
        break;

    case 'news':
        $mainController->newsAction();

        break;

    case 'donate':
        $mainController->donateAction();
        break;

    case 'contact':
        $mainController->contactAction();
        break;

    case 'obituary':
        $mainController->obituaryAction();
        break;

    /*case 'list':
        $mainController->listAction();
        break;

    case 'showOne':
        $mainController->showOneAction();
        break;*/

    default:
        $mainController->indexAction();
        // $mainController->listAction();
        
        
}


/*
// get action GET parameter (if it exists)
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

$mainController = new MainController();

if ('history' == $action) {
    $mainController->historyAction();
} else if ('news' == $action){
    $mainController->newsAction();
} else if ('donate' == $action) {
    $mainController->donateAction();
} else if ('contact' == $action) {
    $mainController->contactAction();
} else if ('obituary' == $action) {
    $mainController->obituaryAction();
} else if ('site_map' == $action) {
    $mainController->site_mapAction();
} else {
    // default is home page ('index' action)
    $mainController->indexAction();
}*/



