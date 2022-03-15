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
        header("location: ../sginup.php?error=empty_input");
        exit();
    }
    if (invalidUName($username) !== false) {
        header("location: ../sginup.php?error=username_error");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../sginup.php?error=email_error");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../sginup.php?error=pwd_error");
        exit();
    }
    if (uNameExists($conn, $username, $email) !== false) {
        header("location: ../sginup.php?error=username_taken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ../signup.php");
    exit;
}