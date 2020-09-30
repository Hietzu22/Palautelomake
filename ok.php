<?php

session_start();

if ( !isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == 'no' ) {
    header('Location: login.php');

}
?>

<meta charset="UTF-8">

<p><a href="logout.php">Kirjaudu ulos</a></p>

<h1>Tervetuloa Ylläpitäjäpaneeliin!</h1>
<p>Olet sisällä!</p>
<?php

$xml = simplexml_load_file('feedback.xml');

?>