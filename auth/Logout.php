<?PHP 
    session_start();
    session_unset();
    session_destroy();

    header("Location: http://localhost:3000//index.php ");

?>