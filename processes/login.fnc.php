<?php ;

if (isset($_POST["submit"])) {
    
    $username = $_POST["uname"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.fnc.php';
    require_once 'functions.fnc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../index.php?error=empty_input");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../index.php");
    exit();
}