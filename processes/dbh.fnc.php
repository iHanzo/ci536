<?php ;

$serverName = "ih226.brighton.domains";
$dBUsername = "ih226_dbh";
$dBPassword = "hHTMqXVnda";
$dBName = "ih226_ci536";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}