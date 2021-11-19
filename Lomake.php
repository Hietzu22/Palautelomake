<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palaute</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Lomake</h1>

    <div class="navbar">
        <a href="Lomake.php">Lomake</a>
        <a href="feedback.php">Palaute</a>
        <a href="http://it.esedu.fi/~hietanen.veeti/index.php">Takaisin kotisivulle</a>
    </div>
    <br>

    <form method="get" action="save.php">

    <div class="formgroup">
        <label for="name">Nimi</label>
        <input type="text" name="name" id="nimi">

        <label for="feedback">Palaute</label>
        <textarea name="feedback" id="" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="Lähetä">
    </form>

</body>
</html>