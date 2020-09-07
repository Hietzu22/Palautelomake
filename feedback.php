<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palaute</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="navbar">
        <a href="Lomake.php">Lomake</a>
        <a href="feedback.php">Palaute</a>
    </div>

    <h1>Feedback</h1>
    <form action="http://it.esedu.fi/~hietanen.veeti/Hietzu22_Kotisivu/index.html">
        <input type="submit" value="Takaisin kotisivuille" />
    </form>
    <?php
        include('feedback.txt')
    ?>
</body>
</html>