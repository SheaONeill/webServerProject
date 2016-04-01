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
    case 'adminEditVerse':
        $adminController->adminEditVerseAction();
        break;

    case 'adminEditNews':
        $adminController->adminEditNewsAction();
        break;

    case 'adminEditDonation':
        $adminController->adminEditDonationAction();
        break;

    case 'adminEditUser':
        $adminController->adminEditUserAction();
        break;

    //---------- login ROUTES ---------------
    case 'logout':
        $loginController->logoutAction();
        break;

    case 'processLogin':
        $loginController->processLoginAction();
        break;


    //---------- main ROUTES ---------------

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

    case 'site_map':
        $mainController->site_mapAction();
        break;

    case 'contactForm':
        $mainController->contactFormAction();
        break;

    default:
        $mainController->indexAction();
        // $mainController->listAction();
        
        
}

