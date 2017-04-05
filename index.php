<!DOCTYPE html>

<?php
//session_start();        // Startet Session + Zugriff auf Session-Variable
?>
<?php
include 'connect.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="design.css" rel="stylesheet">
        <!-- <meta http-equiv="refresh" content="5; URL=//google.de/"> -->
        <title>Uebung</title>
    </head>

    <body>
        <h2>Bitte melde dich an!</h2>
        <form action="index.php" method="GET">
            <input type="text" name="username" placeholder="Username"> <br><br>
            <input type ="password" name="password" placeholder="Passwort"> <br><br>
            <input type="submit" value="OK!">
        </form>

        <?php
        if (isset($_GET["username"]) AND isset($_GET["password"])) {
            $username = $_GET["username"];
            $password = $_GET["password"];

            $sql = 'SELECT * FROM `person` WHERE username="' . $username . '" And password="' . $password . '"';    //Abfrage
            $ergebnis = mysqli_query($db, $sql);      // Abfrage mit der query
            $row = mysqli_fetch_array($ergebnis);

            if ($row ['username'] == $username && $row ['password'] == $password) {
                echo 'Welcome in, ' . $username;
                //echo' Du wirst in 5 Sekunden weitergeleitet auf Google.de!';
            } else {
                echo 'Bitte Anmeldedaten überprüfen!';
            }
            
            
        }
        ?>
    </body>
</html>
