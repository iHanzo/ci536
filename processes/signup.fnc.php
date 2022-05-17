<?php ;

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uname"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.fnc.php';
    require_once 'functions.fnc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../index.php?error=empty_input");
        exit();
    }
    else if (invalidUName($username) !== false) {
        header("location: ../index.php?error=username_error");
        exit();
    }
    else if (invalidEmail($email) == false) {
        header("location: ../index.php?error=email_error");
        exit();
    }
    else if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../index.php?error=pwd_error");
        exit();
    }
    else if (uNameExists($conn, $username, $email) !== false) {
        header("location: ../index.php?error=username_taken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ../index.php");
    exit;
}
