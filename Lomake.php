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
    </div>
    <br>

    <form method="get" action="save.php">
        <label for="name">Nimi</label>
        <br>
        <input type="text" name="name">
        <br>

        <label for="feedback">Palaute</label>
        <br>
        <textarea name="feedback" id="" cols="30" rows="10"></textarea>
        <br>

        <input type="submit" value="Lähetä">
    </form>

</body>
</html>