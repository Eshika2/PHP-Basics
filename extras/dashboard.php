<?php
    session_start();

    if(isset($_SESSION['username'])) {
        echo '<h1> Welcome ' . $_SESSION['username'] . '</h1>';
        echo '<a href="logout.php">LogOut</a><br>';
    } else {
        echo '<h1> Welcome Guest</h1><br>';
        echo '<a href="/PHP Basics/13_Sessions.php">Home</a>';
    }

?>