<?php
/**
 * Created by PhpStorm.
 * User: B00084432
 * Date: 15/03/2016
 * Time: 14:11
 */

// get action GET parameter (if it exists)
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

if ('about' == $action){
    require_once __DIR__ . '/../templates/history.php';
} else if ('contact' == $action) {
    require_once __DIR__ . '/../templates/news.php';
} else if ('list' == $action) {
    require_once __DIR__ . '/../templates/donate.php';
} else if ('list' == $action) {
    require_once __DIR__ . '/../templates/contact.php';
} else if ('sitemap' == $action) {
    require_once __DIR__ . '/../templates/site_map.php';
} else {
    // default is home page ('index' action)
    require_once __DIR__ . '/../templates/index.php';
}