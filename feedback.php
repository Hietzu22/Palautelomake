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
        $xml = simplexml_load_file('feedback.xml');
    ?>

    <?php foreach ($xml->entry as $entry): ?>
        <?php if ($entry->attributes()['visible'] == 'true'): ?>
        <div class="EntryDisplay">
            <h3><?php echo $entry->name; ?></h3>
            <h3><?php echo $entry->feedback; ?></h3>
            <h3><?php echo $entry->date; ?></h3>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>
</body>
</html>