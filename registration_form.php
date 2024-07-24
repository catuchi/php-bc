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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to Fakebook</h2>
        <label for="">Username:</label>
        <input type="text" name="username"> <br>
        <label for="">Password:</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
            echo "Please enter a username <br>";
        } elseif (empty($password)) {
            echo "Please enter a password <br>";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
            try {
                mysqli_query($conn, $sql);
                echo "User successfully registered <br>";
            } catch (mysqli_sql_exception) {
                echo "Could not register user";
            }
        }
    }
    mysqli_close($conn);
?>