<?php include_once 'header.php';?>

    <section class="index-header">
        <h1>What I have learned in CI435.</h1>
    </section>
    
    <section class="index-content">
        <h2>Content</h2>
        <div class=index-content-list>
            <div>
                <h3>Content A</h3>
            </div>
            <div>
                <h3>Content B</h3>
            </div>
            <div>
                <h3>Content C</h3>
            </div>
            <div>
                <h3>Content D</h3>
            </div>
        </div>
    </section>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "empty_input") {
            echo '<script type="text/javascript">
                window.onload = function () {alert("Please, fill in all fields!"); }
            </script>';
            }
            else if ($_GET["error"] == "wrong_login") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Wrong login details!"); }
            </script>';
            }
            else if ($_GET["error"] == "username_error") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Username can only contain letters and numbers!"); }
            </script>';
            }
            else if ($_GET["error"] == "email_error") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Email format is incorrect!"); }
            </script>';
            }
            else if ($_GET["error"] == "pwd_error") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Passwords do not match!"); }
            </script>';
            }
            else if ($_GET["error"] == "username_taken") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Username is already taken!"); }
            </script>';
            }
            else if ($_GET["error"] == "stmt_failed") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("Something went wrong. Please try again!"); }
            </script>';
            }
            else if ($_GET["error"] == "none") {
                echo '<script type="text/javascript">
                window.onload = function () {alert("You have signed up!"); }
            </script>';
            }
        }
    ?>

<?php include_once 'footer.php';?>