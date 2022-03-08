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
    </section>

<?php include_once 'footer.php';?>