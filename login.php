<?php include_once 'header.php';?>

    <section class="login-form">
        <h1>Login</h1>
        <form action="processes/login.fnc.php" method="POST">
            <input type="text" name="uname" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
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
    </section>
    
<?php include_once 'footer.php';?>