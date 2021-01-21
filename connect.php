<?php// Change this to your connection info.
$DATABASE_HOST = 'mi3-ss55';
$DATABASE_USER = 'AHDAdmin';
$DATABASE_PASSWORD = '3ED*3^^e70WZl';
$DATABASE_NAME = 'ahousedi_phplogin';
// Try and connect using the info above.
$con = new PDO('mysql:host=localhost;dbname=ahousedi_phplogin', 'ahousedi_ahousedi', '26Uz7wV4:]rYuN');
error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "/tmp/php-error.log");

