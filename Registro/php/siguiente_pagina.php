<?php
    session_start();
    session_destroy();
    header("location: ../reemplazo.php");

?>