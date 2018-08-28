<?php
session_start();
if (empty($_SESSION['usr'])) {
    header('Location:http://php1.local/login.php');
}
include __DIR__ . '/functions.php';
if (null !== getCurrentUser()) { ?><h4>Приветствуем вас, <?php echo ucfirst(getCurrentUser()); ?> </h4>
<?php include __DIR__ . '/galary.php'; }
?>


