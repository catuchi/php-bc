<?php
    // session = SGB (super global variable) used to store information on a user
    //              to be used across multiple pages.
    //              A user is assigned a session-id ex. login credentials

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sessions.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username"> <br>
        <label for="">Password:</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Login"> <br>
    </form>
</body>
</html>
<?php
    // $_SESSION["username"] = "Shin";
    // $_SESSION["password"] = "pizza";
    
    // echo $_SESSION["username"] . "<br>";
    // echo $_SESSION["password"] . "<br>";
    
    if(isset($_POST["login"])) {
        if(!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");           // redirects to home.php
        }
    } else {
        echo "Missing username/password <br>";
    }
?>