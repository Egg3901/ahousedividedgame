<?php// Change this to your connection info.
$DATABASE_HOST = 'mi3-ss55';
$DATABASE_USER = 'AHDAdmin';
$DATABASE_PASSWORD = '3ED*3^^e70WZl';
$DATABASE_NAME = 'ahousedi_phplogin';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
