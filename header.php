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
            <li><button onclick="document.getElementById('sign').style.display='block'">Sign Up</button></li>
            <li><button onclick="document.getElementById('log').style.display='block'">Login</button></li>
        </ul>
    </div>
</nav>

<div id="sign" class="formbox">
    <span onclick="document.getElementById('sign').style.display='none'" class="close" title="Close">X</span>
    <form class="form-content" action="processes/signup.fnc.php" method="POST">
        <div class="fields">
            <h1>Sign Up</h1>
            <input type="text" name="name" placeholder="Full name (optional)">
            <input type="text" name="email" placeholder="Email" required>
            <input type="text" name="uname" placeholder="User name" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <input type="password" name="pwdrepeat" placeholder="Repeat password" required>
            <p>Creation of an account is an acceptance of our <a href ="">Terms and Privacy</a> </p>

            <div class="buttons">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signup">Sign Up</button>
            </div> 
        </div>
    </form>
</div>

<div id="log" class="formbox">
    <span onclick="document.getElementById('log').style.display='none'" class="close" title="Close">X</span>
    <form action="processes/login.fnc.php" method="POST">
        <div class="fields">
            <h1>Login</h1>
            <input type="text" name="name" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">

            <div class="buttons">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="login">Login</button>
            </div> 
        </div>
    </form>
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
<div class="wrapper">
