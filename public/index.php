<?php
require_once __DIR__ . '/../src/MainController.php';
require_once __DIR__ . '/../vendor/autoload.php';

session_start();

use Itb\MainController;
//use Itb\Player;

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'itb');

// get action GET parameter (if it exists)
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

$id=filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);

$mainController = new MainController();
//$player = new Player();

if ('membership' == $action) {
    $mainController->membershipAction();
}else if('delete' == $action){
    $mainController->deleteAction();
}else if('player'== $action) {
    $mainController->playerAction();
}else if('processLogin' == $action) {
    $mainController->processLoginAction();
}else if('contact' == $action) {
    $mainController->contactAction();
}else if('login' == $action) {
    $mainController->loginAction();
}else if ('logout' == $action) {
    $mainController->logoutAction();
}else if ('sitemap' == $action) {
    $mainController->sitemapAction();
}else if('processNewMember' == $action) {
    $mainController->processNewMemberAction();
}else if('updateDetails' == $action) {
    $mainController->updateDetailsAction();
}else if('submitMessage' == $action) {
    $mainController->submitMessageAction();
}else if('submitCommentMessage' == $action) {
    $mainController->submitCommentMessageAction();
}else if('list' == $action){
    $mainController->listAction();
} else {
    // default is home page ('index' action)
    $mainController->indexAction();
    // require_once __DIR__ .'/../templates/index.php';
}