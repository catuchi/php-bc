<?php
    $username = "Monkey D. Luffy";
    $phone = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 30, "👒", STR_PAD_LEFT);
    // $phone = str_replace("-", "", $phone);
    // echo $phone."<br>";
    // echo $username = strrev($username);
    // $username = str_shuffle($username);
    // echo $equals = strcmp($username, "Monkey D. Luffy") . "<br>";
    // echo $count = strlen($username) . "<br>";
    // echo $index = strpos($username, "D") . "<br>";
    // echo $firstname = substr($username, 0, 6) . "<br>";
    $fullname = explode(" ", $username);
    // foreach($fullname as $name){
    //     echo "{$name} <br>";
    // }
    echo $fullname = implode(" ", $fullname);
    echo "<br>";
    echo $username;
?>