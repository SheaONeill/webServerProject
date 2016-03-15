<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 15/03/2016
 * Time: 14:11
 */


require_once __DIR__ . '/../vendor/autoload.php';

use ItbProject2016\MainController;

// get action GET parameter (if it exists)
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

$mainController = new MainController();

if ('history' == $action){
    $mainController->historyAction();
if ('news' == $action){
    $mainController->newsAction();
} else if ('contact' == $action) {
    $mainController->contactAction();
} else if ('donate' == $action) {
    $mainController->donateAction();
} else if ('sitemap' == $action) {
    $mainController->sitemapAction();
} else {
    // default is home page ('index' action)
    $mainController->indexAction();
}}



