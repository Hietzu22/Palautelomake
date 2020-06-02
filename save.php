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

    $file = fopen('feedback.txt', 'a') or die('Could not open file');
    $rivi = "<p>$name<br>$feedback<br>$pvm</p>" . PHP_EOL;
    fwrite($file, $rivi);
?>