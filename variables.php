<?php
    // variable = a reusable container that holds data (string, integer, float, boolean etc.)
    $name = "Ri Shin";
    $food = "pasta";
    $email = "great-general@email.com";
    echo $name;
    echo "<br>";
    echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email}<br>";

    $age = 21;    // int
    $users = 2;
    $quantity = 3;
    echo "You are {$age} years old<br>";
    echo "There are {$users} users online<br>";
    echo "You would like to buy {$quantity} dumplings<br>";

    $gpa = 3.5;     // float
    $price = 4.99;
    echo "Your gpa is {$gpa}<br>";
    echo "Your dumplings are \${$price}<br>";

    $employed = true;       // boolean
    $online = false;
    $for_sale = false;
    echo "Online status: {$online}<br>";
    echo "Employment status: {$employed}<br><br>";

    $total = null;

    echo "You have ordered {$quantity} plates of {$food}<br>";
    $total =  $quantity * $price;
    echo "Your total is: \${$total}";
?>