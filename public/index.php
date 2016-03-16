<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Itb\MainController;

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
}



