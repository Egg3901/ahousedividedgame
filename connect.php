<?php// Change this to your connection info.
$DATABASE_HOST = 'mi3-ss55';
$DATABASE_USER = 'AHDAdmin';
$DATABASE_PASSWORD = '3ED*3^^e70WZl';
$DATABASE_NAME = 'ahousedi_phplogin';
// Try and connect using the info above.
$con = new PDO('mysql:host=localhost;dbname=ahousedi_phplogin', 'ahousedi_ahousedi', '26Uz7wV4:]rYuN');
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
