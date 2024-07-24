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

    $sql = "SELECT * FROM users WHERE user = 'Luffy'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    } else {
        echo "No user found";
    }
?>
<?php
    mysqli_close($conn);
?>