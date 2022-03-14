<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/reset.css" rel="stylesheet" />
    <link href="css/normalize.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>

<nav>
    <div class="wrapper">
        <ul>
            <li><a href="index.php">Home Page</a></li>
            <?php
                if (isset($_SESSION["userid"])) {
                    echo "<li><a href='profile.php'>Profile</a></li>";
                    echo "<li><a href='logout.php'>Log out</a></li>";
                }
                else {
                    echo "<li><a href='signup.php'>Register</a></li>";
                    echo "<li><a href='login.php'>Login</a></li>";
                }
            ?>
        </ul>
    </div>
</nav>

<div class="wrapper">
