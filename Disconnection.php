<?php
session_start();
session_destroy();
header("Location: http://training.local/Main_menu.php");
?>