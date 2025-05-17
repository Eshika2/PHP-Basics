<?php
    session_start();

    session_destroy();
    
    header('Location: /PHP Basics/13_Sessions.php');
?>