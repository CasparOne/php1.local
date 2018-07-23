<?php
session_start();
include __DIR__ . '/galary.php';
if ($_SESSION['usr'] == $login) {
    header('Location:http://php1.local/index.php');
} else {
    header('Location:http://php1.local/login.php');
}
