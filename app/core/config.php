
<?php 

defined('ROOTPATH') OR exit('Access Denied');



if($_SERVER['SERVER_NAME'] == 'localhost'){

    // databse config
    define("DBNAME","quick_mvc");
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPASSWORD","");

    define('ROOT','http://localhost/place-your-root/public');
}else{

        // databse config
        define("DBNAME","quick_mvc");
        define("DBHOST","localhost");
        define("DBUSER","root");
        define("DBPASSWORD","");
        
    define('ROOT','https://www.varshochi.com');
}


define("APP_NAME","My Website");
define("APP_DESC","Best website on the planet");

// true means shoe errors (in live server we set it to false)
define("DEBUG",true);
