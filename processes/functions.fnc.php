<?php

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUName($username) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    if  (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    if  ($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uNameExists($conn, $username, $email) {
    // ? is placeholder for prepared statements so user input is not sent to database immediately
    // protects against SQL injection attacks
    $sql = "SELECT * FROM users WHERE userUName = ? OR userEmail = ?;";
    // create prepared statement
    $stmt = mysqli_stmt_init($conn);
    
    // check if prepared statement will fail
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        // if there is false -> user sent to signup
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    // assign the 2 user submitted strings (ss) to the prepared statement
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    // check if user data exists in database
    // assign user data to $row for login
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $pwd) {
    $sql = "INSERT INTO users (userName, userEmail, userUName, userPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmt_failed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
}

function emptyInputLogin($username, $pwd) {
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd) {
    $validUName = uNameExists($conn, $username, $username);

    if ($validUName === false) {
        header("location: ../index.php?error=wrong_login");
        exit();
    }

    $pwdHashed = $validUName["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../index.php?error=wrong_login");
        exit();
    }
    else if ($checkPwd === true) {
            session_start();
            $_SESSION["userid"] = $validUName["userId"];
            $_SESSION["useruname"] = $validUName["userUName"];
            header("location: ../index.php");
            exit();

    }
}