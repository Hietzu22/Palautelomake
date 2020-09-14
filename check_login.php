<?php

session_start();

if (!isset($_POST['nimi']) == 'Adminview!') {
    header('Location: ok.php');
    die;
} else if (!isset($_POST['nimi']) || 'Adminview!') {
    header('Location: login.php');
}

$_SESSION['logged_in'] = 'yes';
$_SESSION['nimi'] = $_POST['nimi'];

header('Location: ok.php');
