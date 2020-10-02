<?php

session_start();

if ( !isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == 'no' ) {
    header('Location: login.php');

}

if (isset($_GET['action'])){
    $id = intval($_GET['id']);
    include_once 'my_functions.php';

    $action = $_GET['action'];
    if ($action == 'poista') {
        // Poistetaan viesti xml-tiedostosta
        deleteMessage($id);
    }

    if ($action == 'piilota') {
        // Piilotetaan viesti xml-tiedostosta
        hideMessage($id);
    }
}

?>

<meta charset="UTF-8">

<p><a href="logout.php">Kirjaudu ulos</a></p>

<h1>Tervetuloa Ylläpitäjäpaneeliin!</h1>
<p>Olet sisällä!</p>
<?php
    $xml = simplexml_load_file('feedback.xml');
?>

<?php 
    $id = 0;
    foreach ($xml->entry as $entry): ?>
    <div class="EntryDisplay">
        <h3><?php echo $entry->name; ?></h3>
        <h3><?php echo $entry->feedback; ?></h3>
        <h3><?php echo $entry->date; ?></h3>
        <div class="actions">
            <a class="btn" href="?action=poista&id=<?php echo $id; ?>">Poista</a>
            <a class="btn" href="?action=piilota&id=<?php echo $id; ?>">Piilota</a>
        </div>
    </div>
    <?php $id++; ?>
<?php endforeach; ?>