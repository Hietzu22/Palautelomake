<?php
    var_dump($_SERVER['REQUEST_METHOD']);
    var_dump($_GET);
    if ($_SERVER['REQUEST_METHOD'] != 'GET') {
        die('You didnt come from a form!');
    }

    if (!isset($_GET['name']) || !isset($_GET['feedback'])) {
        die('You didnt come from the right form!');
    }

    $name = $_GET['name'];
    $feedback = $_GET['feedback'];
    $pvm = date("d.m.Y");

    include_once 'my_functions.php';
    saveDataToXML($_GET);

    header('Location: feedback.php');
?>