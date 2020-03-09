<?php

$dbhost = 'db';
$dbuser = 'user';
$dbpass = '1234';
$dbname = 'test';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

$sql = "CREATE TABLE host(
       host VARCHAR(30) NOT NULL,
       time VARCHAR(30) NOT NULL
       )";
mysqli_query($conn,$sql);

mysqli_close($conn);

?>

