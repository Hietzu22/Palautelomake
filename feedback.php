<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palaute</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Palaute</h1>

    <div class="navbar">
        <a href="Lomake.php">Lomake</a>
        <a href="feedback.php">Palaute</a>
        <a href="http://it.esedu.fi/~hietanen.veeti/Hietzu22_Kotisivu/index.html">Takaisin kotisivulle</a>
        <a href="login.php">Admin view</a>
        <br>
    </div>
    

    <?php
        include('feedback.xml')
    ?>
</body>
</html>