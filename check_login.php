<?php

session_start();

if ($_POST['nimi'] == 'Adminview!') {
    $_SESSION['logged_in'] = 'yes';
    $_SESSION['nimi'] = $_POST['nimi'];
    header('Location: ok.php');
    die();
} else {
    header('Location: login.php');
    die();
}