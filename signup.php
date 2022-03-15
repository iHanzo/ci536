<?php include_once 'header.php';?>

    <section class="signup-form">
        <h1>Sign up</h1>
        <form action="processes/signup.fnc.php" method="POST">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uname" placeholder="User name">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat password">
            <button type="submit" name="submit">Sign up</button>
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
    </section>

<?php include_once 'footer.php';?>