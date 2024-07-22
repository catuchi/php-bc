<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <label for="">Enter a country:</label>
        <input type="text" name="country">
        <input type="submit">
    </form> <br>
</body>
</html>
<?php
    // associative arrays = an array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array(
        "USA" => "Washington D.C.",
        "Japan" => "Kyoto",
        "South Korea" => "Seoul",
        "India" => "New Delhi"
    );

    // echo $capitals["USA"];
    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "Beijing";
    // array_pop($capitals);
    // array_shift($capitals);
    // $keys = array_keys($capitals);
    // foreach($keys as $key){
    //     echo $key . "<br>";
    // }
    // echo "<br><br>";
    // $values = array_values($capitals);
    // foreach($values as $value){
    //     echo $value . "<br>";
    // }
    // echo "<br><br>";
    // $capitals = array_flip($capitals);
    // $capitals = array_reverse($capitals);
    // echo count($capitals);
    // echo "<br><br>";

    // foreach ($capitals as $key => $value) {
    //     echo "The capital of {$key} is {$value} <br>";
    // }
    
    $capital = $capitals[$_POST["country"]];
    // echo $capital;
    echo "The capital of {$_POST["country"]} is {$capital} <br>";
?>