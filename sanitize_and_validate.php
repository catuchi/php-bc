<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize_and_validate.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username"> <br>
        <label for="">Age:</label>
        <input type="text" name="age"> <br>
        <label for="">Email:</label>
        <input type="text" name="email"> <br>
        <input type="submit" name="login" value="Log in">
    </form> <br>
</body>
</html>
<?php
    if (isset($_POST["login"])) {
        // sanitize
        // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
        // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        // echo "Hello {$username}, you are {$age} years old <br>";
        // echo "Your email is {$email}";

        // validate
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        if(empty($email)) {
            echo "That is not a valid email <br>";
        } else {
            echo "You email is $email <br>";

        }
    }
?>