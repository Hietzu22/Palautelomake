<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
    <h1>Feedback</h1>

    <form method="get" action="save.php">
        <label for="name">Name</label>
        <br>
        <input type="text" name="name">
        <br>

        <label for="feedback">Feedback</label>
        <br>
        <textarea name="feedback" id="" cols="30" rows="10"></textarea>
        <br>

        <input type="submit" value="Send">
    </form>

</body>
</html>