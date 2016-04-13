<?php

//start the session
session_start();

require_once __DIR__ . '/../vendor/autoload.php';

use StJosephsChurchEastWall\MainController;
use StJosephsChurchEastWall\AdminController;
use StJosephsChurchEastWall\LoginController;
use StJosephsChurchEastWall\NewsFeedController;
use StJosephsChurchEastWall\CartController;


define('DB_HOST', 'localhost');
define('DB_USER', 'JesusChrist');
define('DB_PASS', 'HolyGod');
define('DB_NAME', 'stjosephschurcheastwall');



$action = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
$mainController = new MainController();
$adminController = new AdminController();
$loginController = new LoginController();
$newsFeedController = new NewsFeedController();
$cartController = new CartController();

switch ($action){

    //--------------- Admin Verse Section ----------------

    case 'adminVerse':
        $adminController->adminVerseAction();
        break;

    //--------------- Admin News Section ----------------

    case 'adminNews':

        $newsFeedController->adminNewsAction("showAllNewsItems");
        break;

    case 'showSingleNewsItem':

        $newsFeedController->adminNewsAction("showSingleNewsItem");
        break;

    //--------------- Admin News CRUD Section ----------------

    case 'showCreateNewsArticle':

        $newsFeedController->showCreateNewsArticleAction();
        break;

    case 'createNewsArticle':

        $newsFeedController->createNewsArticleAction();
        break;

    case 'showEditNewsArticle':

        $newsFeedController->showEditNewsArticleAction();
        break;

    case 'editNewsArticle':

        $newsFeedController->editNewsArticleAction();
        break;


    //--------------- Admin Test Section ----------------

    case 'deleteNewsArticle':

        $newsFeedController->deleteNewsArticleAction();
        break;

//--------------- Admin Shop Section ----------------

    case 'adminShop':
        $adminController->adminShopAction();
        break;

    //--------------- Admin User Section ----------------

    case 'adminUser':
        $adminController->adminUserAction();
        break;

    //---------- login ROUTES ---------------
    case 'logout':
        $loginController->logoutAction();
        break;

    case 'processLogin':
        $loginController->processLoginAction();
        break;

    //---------- Cart ROUTES ---------------

    case 'addToCart':
        $cartController->addToCart();
        break;

    case 'removeFromCart':
        $cartController->removeFromCart();
        break;

    case 'emptyCart':
        $cartController->forgetSession();
        break;


    //---------- main ROUTES ---------------

    case 'history':
        $mainController->historyAction();
        break;

    case 'news':
        $mainController->newsAction();

        break;

    case 'shop':
        $mainController->shopAction();
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

