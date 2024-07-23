<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
        echo "connected <br>";
    } catch (mysqli_sql_exception) {
        echo "Could not connect <br>";
    }

    $username = "Squidward";
    $password = "clarinet2";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    try {
        mysqli_query($conn, $sql);
        echo "User is now registered <br>";
    } catch (mysqli_sql_exception) {
        echo "Could not register user <br>";
    }

    mysqli_close($conn);
?>