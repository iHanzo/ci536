<?php include_once 'header.php';?>

    <section class="login-form">
        <h1>Login</h1>
        <form action="processes/login.fnc.php" method="POST">
            <input type="text" name="name" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>
        </form>
    </section>
    
<?php include_once 'footer.php';?>