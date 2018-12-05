<!DOCTYPE html>
<html>
<body>

<?php
//$servername = 'betaweb.csug.rochester.edu';
$servername = 'localhost';
//$username = 'yyang107';
$username = 'hzhang90';
//$password = 'mysql107';
$password = 'mwJ2a9Wb';
//$dbname = 'yyang107';
$dbname = 'hzhang90';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
            die("connect fail: " . $conn->connect_error);
        }

?>
</body>
</html>


