<?php
//Assign constants 
echo  "Hey there";
    //Host
try {
    define("HOST", "localhost");
    //dbname
    define("DBNAME", "GuzoGateways");
    //Username 
    define("USER", "root");
    //Password
    define("PASS", "");

    // Create connection using PDO
    $conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($conn == true) {
        echo "Connection established";
    } else {
        echo "Connection failed";
    }
    // $servername = "localhost";
    // $username = "username";
    // $password = "password";

    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected successfully";
    //     }
    // catch(PDOException $e)
    //     {
    //     echo "Connection failed: " . $e->getMessage();
    //     }
}
catch( PDOException $Exception ) {

    echo $Exception->getMessage();
}
?>