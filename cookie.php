<?php
    // cookie = information about a user stored in a user's web-browser
    //          targeted adverts, browing preferences, and other non-sensitive data

    // set cookies
    setcookie("fav_food", "pasta", time() + (86400 * 2), "/");
    setcookie("fav_drink", "bubbly", time() + (86400 * 3), "/");
    setcookie("fav_desert", "creamsicle", time() + (86400 * 3), "/");
    
    // delete cookies
    // setcookie("fav_food", "pasta", time() - 0, "/");
    // setcookie("fav_drink", "bubbly", time() - 0, "/");
    // setcookie("fav_desert", "creamsicle", time() - 0, "/");

    foreach($_COOKIE as $key => $value) {
        echo "$key = $value <br>";
    }
?>