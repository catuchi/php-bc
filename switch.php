<?php
    // switch = replacement to using many elseif statements
    //          more efficient, less code to write

    $grade = "A";

    switch ($grade) {
        case "A":
            echo "You did great <br>";
            break;
        case "B":
            echo "You did good <br>";
            break;
        case "C":
            echo "You did okay <br>";
            break;
        case "D":
            echo "You did poorly <br>";
            break;
        case "F":
            echo "You failed <br>";
            break;
        default:
            echo "{$grade} is not valid <br>";
            break;
    }

    $date = date("l");
    // echo $date;

    switch($date){
        case "Monday":
            echo "Monday Madness <br>";
            break;
        case "Tuesday":
            echo "Taco Tuesday <br>";
            break;
        case "Wednesday":
            echo "Winning Wednesday <br>";
            break;
        case "Thursday":
            echo "Thumping Thursday <br>";
            break;
        case "Friday":
            echo "Freaky Friday <br>";
            break;
        case "Saturday":
            echo "Steamy Saturday <br>";
            break;
        case "Sunday":
            echo "Super Sunday <br>";
            break;
        default:
            echo "This is a phantom day <br>";
            break;
    }
?>