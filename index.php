<?php
session_start();

if (empty($_SESSION['usr'])) {
    header('Location:http://php1.local/login.php');
}
include __DIR__ . '/galary.php';

