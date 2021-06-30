<?php
    session_start();
    session_destroy();
    echo "<script src='script.js'></script>";
    echo "<script>GOTOINDEX();</script>";
?>
