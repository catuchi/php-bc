<?php
    // logical operators = combine conditional statements
    //  if(condition1 && condition2)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    // ! = True if false. False if true

    $temp = 25;
    $cloudy = true;

    if ($temp  >= 0 && $temp <= 30) {
        echo "The weather is good <br>";
    } else {
        echo "The weather is bad <br>";
    }

    if ($cloudy) {
        echo "It's cloudy <br>";
    } else {
        echo "It's sunny. <br>";
    }

    $age = 21;
    $citizen = true;

    if ($age >= 18 && $citizen) {
        echo "You can vote <br>";
    } else {
        echo "You cannot vote <br>";
    }

    $child = false;
    $senior = false;
    $ticket = null;

    if ($child || $senior) {
        $ticket = 10;
    } else {
        $ticket = 15;
    }

    echo "The ticked price is \${$ticket} <br>";
?>