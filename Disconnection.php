<?php
session_start();
session_destroy();
header("Location: http://fridge.local/Main_menu.php");
?>