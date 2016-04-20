<?php
require_once __DIR__ . '/../vendor/autoload.php';

use StJosephsChurchEastWall\User;

define('DB_HOST', 'localhost');
define('DB_USER', 'JesusChrist');
define('DB_PASS', 'HolyGod');
define('DB_NAME', 'stjosephschurcheastwall');

$shea = new User();
$shea->setId(1);
$shea->setUsername('shea');
$shea->setPassword('admin2409');
$shea->setRole(User::ROLE_ADMIN);

User::insert($shea);

$users = User::getAll();

var_dump($users);