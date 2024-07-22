<?php
    // function = write some code once, reuse when you need it
    //              type () after function name to invoke
    //              ex. add() subtract() multiply() divide()

    function happy_birthday($firstname, $age){
        echo "Happy birthday to you! <br>";
        echo "Happy birthday to you! <br>";
        if($firstname) {
            echo "Happy birthday! Dear {$firstname}! <br>";
        } else {
            echo "Happy birthday! Happy birthday!! <br>";
        }
        echo "Happy birthday to you!!! <br><br>";

        if($age) {
            echo "You are {$age} years today <br>";
            echo "Many more years to you <br>";
            echo "Many more years, many more years <br>";
            echo "Many more years to you!! <br><br>";
        }
    }

    happy_birthday("Luka", 12);

    function is_even($number) {
        return $number % 2 == 0 ? 0 : 1;
    }

    echo is_even(11) . "<br><br>";

    function hypotenuse($a, $b) {
        return sqrt(pow($a, 2) + pow($b, 2));
    }

    echo hypotenuse(5, 12);
?>