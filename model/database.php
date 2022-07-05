<?php
    $dsn = 'mysql:host=127.0.0.1;dbname=world';

    // How to add your port (check your port from xampp)
    // $dsn = 'mysql:host=127.0.0.1;port=3310;dbname=world';

    //$username = 'INSERT YOUR USERNAME';
    //$password = 'INSERT YOUR PASSWORD';

    try {
      $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = "Database Error: ";
        $error_message .= $e->getMessage();
        include('view/error.php');
        exit();
    }
?>