<?php
// logout code based on https://www.youtube.com/watch?v=NXAHkqiIepc
session_start();
session_destroy();
header('location:login.php');
?>
