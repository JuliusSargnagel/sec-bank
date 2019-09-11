<?php
if (
    isset($_REQUEST['mail']) AND 
    isset($_REQUEST['password'])
) {
    if (
        strtolower($_REQUEST['mail']) === "julius.sargnagel@sec-bank.at" 
        AND strtolower($_REQUEST['password']) === substr((hash('sha256', strtolower($_REQUEST['mail']))), 0, 20)
    ) {
        echo "Sie haben sich erfolgreich angemeldet.";
    } else {
        echo "<h3>Testausgaben</h3>";
        echo "<p>Eingabe Mail: " . $_REQUEST['mail'] . "</p>";
        echo "<p>Eingabe Passwort: " . hash('sha256', strtolower($_REQUEST['mail'])) . "</p>";
        echo "<h3 style='color:red'> Achtung! E-Mail/Password falsch!</h3>";
        echo "<p><a href='login.php'>zurück</a></p>";
    }
}
?>
