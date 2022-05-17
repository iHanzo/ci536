<?php
    session_start();
    ini_set("session.cookie_httponly", 1);
    ini_set("session.cookie_secure", 1);
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
<div id ="page-container">
    <div id="content-wrap">
        <nav>
            <div class="wrapper">
                <ul>
                    <li><button onclick="window.location.href='index.php';">Home</button></li>
                    <?php
                    if (isset($_SESSION["userid"])) {
                        echo "<li><button onclick=\"window.location.href='profile.php';\">Profile</button></li>";
                        echo "<li><button onclick=\"window.location.href='logout.php';\">Logout</button></li>";
                    }
                    else {
                        echo "<li><button onclick=\"document.getElementById('sign').style.display='block'\">Sign Up</button></li>";
                        echo "<li><button onclick=\"document.getElementById('log').style.display='block'\">Login</button></li>";
                    }
                    ?>
                </ul>
            </div>
        </nav>

        <div id="sign" class="formbox">
        <!-- <span onclick="document.getElementById('sign').style.display='none'" class="close" title="Close">X</span> (if an X is wanted instead)-->
            <button onclick="document.getElementById('sign').style.display='none'" class="close-button" id="close-button">Close</button>
            <form class="form-content" action="processes/signup.fnc.php" method="POST">
            <div class="fields">
                <h1>Sign Up</h1>
                <input type="text" name="name" placeholder="Full name (optional)">
                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="uname" placeholder="User name" required>
                <input type="password" name="pwd" placeholder="Password" required>
                <input type="password" name="pwdrepeat" placeholder="Repeat password" required>
                <p>Creation of an account is an acceptance of our <a href ="privacypolicy.html">Terms and Privacy</a> </p>

                <div class="buttons">
                    <button type="button" onclick="document.getElementById('sign').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div> 
            </div>
            </form>
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "empty_input") {
                        echo "<p>Fill in all fields!</p>";
                    }
                    else if ($_GET["error"] == "username_error") {
                        echo "<p>Username can only contain letters and numbers!</p>";
                    }
                    else if ($_GET["error"] == "email_error") {
                        echo "<p>Email format is incorrect!</p>";
                    }
                    else if ($_GET["error"] == "pwd_error") {
                        echo "<p>Passwords do not match!</p>";
                    }
                    else if ($_GET["error"] == "username_taken") {
                        echo "<p>Username is already taken!</p>";
                    }
                    else if ($_GET["error"] == "stmt_failed") {
                        echo "<p>Something went wrong. Please try again!</p>";
                    }
                    else if ($_GET["error"] == "none") {
                        echo "<p>You have signed up!</p>";
                    }
                }
            ?>
        </div>

        <div id="log" class="formbox">
            <button onclick="document.getElementById('log').style.display='none'" class="close-button" id="close-button">Close</button>
            <form action="processes/login.fnc.php" method="POST">
            <div class="fields">
                <h1>Login</h1>
                <input type="text" name="name" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Password">

                <div class="buttons">
                    <button type="button" onclick="document.getElementById('log').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="loginbtn">Login</button>
                </div> 
            </div>
            </form>
            <?php
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "empty_input") {
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wrong_login") {
                    echo "<p>Wrong login details!</p>";
                }
                }
            ?>
        </div>
            

        <script>
        // Get the two formboxes
        var login = document.getElementById('log');
        var signup = document.getElementById('sign');

        // Close the boxes if the user clicks anywhere outside of them
        window.onclick = function(event) {
            if (event.target == login) {
                login.style.display = "none";
            }
            if (event.target == signup) {
                signup.style.display = "none";
            }
        }
        </script> 
    <!--<div class="wrapper">-->
