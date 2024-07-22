<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset_and_empty.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username"> <br>
        <label for="">Password:</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Log in"> <br>
    </form>
</body>
</html>
<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, is false, or is null, is ""
    // used for HTML elements

    // $username = "Shin";
    $username = false;

    // echo isset($username);

    // if (isset($username)) {
    //     echo "This variable is set";
    // } else {
    //     echo "This variable is not set";
    // }

    // if (empty($username)) {
    //     echo "This variable is empty";
    // } else {
    //     echo "This variable is not empty";
    // }

    // $_POST is technically an associative array
    foreach ($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is missing <br>";
        } elseif (empty($password)){
            echo "Password is missing <br>";
        } else {
            echo "Hello {$username} <br>";
        }
    }
?>