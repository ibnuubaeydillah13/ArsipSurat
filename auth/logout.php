<?php

    require_once 'index.php';
    session_start();
    
    if ($_SESSION['username']) {
        session_destroy();
        header('location:index.php');
    }

?>