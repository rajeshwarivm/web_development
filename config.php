<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();
session_start();

define('PROJECT_NAME', 'Byju\'s assessment');

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'login_system');

$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
  $DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}

/* * ***** google related activities start ** */
define("API_KEY", "81vgfprnf0my4g");
define("SECRET_KEY", "7apDhQXKQBni6xfo");
/* make sure the url end with a trailing slash */
define("SITE_URL", "http://localhost/byjus_assessment/");
/* the page where you will be redirected for authorzation */
define("REDIRECT_URL", SITE_URL."linkedin_login.php");
/* Set the scope */
define("SCOPE", 'r_basicprofile r_emailaddress' );

define("LOGOUT_URL", SITE_URL."logout.php");
/* * ***** google realted activities end ** */

?>