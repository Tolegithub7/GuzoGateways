<?php
//Assign constants 
echo  "Hey there";
    //Host
    define("HOST", "localhost");
    //dbname
    define("DBNAME", "GuzoGateways");
    //Username 
    define("USER", "root");
    //Password
    define("PASS", "");

    // Create connection using PDO
    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);
    if ($conn == true) {
        echo "Connection established";
    } else {
        echo "Connection failed";
    }



?>