
<?php 

defined('ROOTPATH') OR exit('Access Denied');

//// this function is only called when php tries to run a class can not find s 
spl_autoload_register(function($classname){
    require $filename = "../app/models/".ucfirst($classname).".php";
});

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';

