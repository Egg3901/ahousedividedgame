<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "ahousedi_ahousedi";
$dbpass = "26Uz7wV4:]rYuN";
$db = "ahousedi_phplogin";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
{
$conn -> close();
}

?>

