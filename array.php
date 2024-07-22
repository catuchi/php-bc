<?php
    // array = a special type of variable that holds more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";
    // echo $foods[3] . "<br>";

    // $foods[0] = "pineapple";
    // array_push($foods, "pineapple", "kiwi");
    // array_pop($foods);
    // array_shift($foods);
    // $reversed_foods = array_reverse($foods);
    // foreach ($reversed_foods as $food) {
    //     echo $food . "<br>";
    // }
    // echo "<br><br>";
    echo count($foods) . "<br>";

    foreach ($foods as $food) {
        echo $food . "<br>";
    }
    ?>