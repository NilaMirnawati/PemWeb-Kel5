<?php
session_start();
if (isset($_SESSION['login_user']) == false) {
    header('location: login.php');
}
?>