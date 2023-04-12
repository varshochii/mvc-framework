
<?php 

session_start();


// valid PHP version? 
$minPHPVersion = '8.0';
if(phpversion() < $minPHPVersion){
    die("Your PHP version must be {$minPHPVersion} or higher to run this app. Your current version is" . phpversion()); 
}


// path to this file 
define('ROOTPATH',__DIR__ . DIRECTORY_SEPARATOR);


require '../app/core/init.php';

DEBUG ? ini_set('display_errors',1) : ini_set('display_errors',0);

$app = new App();
$app->loadController();







