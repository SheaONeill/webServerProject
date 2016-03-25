<?php
/**
 * Created by PhpStorm.
 * User: sheaoneill
 * Date: 23/03/16
 * Time: 00:44
 */

/*//
// (1) retrieve data from HTTP request GET
//
$first_name = filter_input(INPUT_GET, 'first_name');

//
// (2) save name in a cookie, to expire in 1 hour
//
$hour_as_seconds = 60*60;
$expire_time = time() + $hour_as_seconds;
setcookie( 'first_name', $first_name, $expire_time );

//
// (3) forward to next page
//
header('Location: DISPLAY_welcome.php');*/


$numItems = sizeof($_GET);

$who_to_contact = filter_input(INPUT_GET, 'who_to_contact', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
$textArea = filter_input(INPUT_GET, 'textArea', FILTER_SANITIZE_STRING);
$newsletter = filter_input(INPUT_GET, 'newsletter', FILTER_SANITIZE_STRING);

//refresh page
header('Location: thank_you');

?>