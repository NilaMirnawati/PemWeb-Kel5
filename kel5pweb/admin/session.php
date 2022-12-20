<?php
session_start();
if (isset($_SESSION['login_admin']) == false) {
    header('location: login_admin.php');
}
?>