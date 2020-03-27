<?php
session_start();
session_destroy();

//kembali atau redirech ke halaman login.php
header('location:login.php');
?>