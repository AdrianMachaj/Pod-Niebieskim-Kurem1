<?php
    session_start();
    // zakoncz sesje
    if(session_destroy()) {
        // wroc na strone logowania
        header("Location: login.php");
    }
?>