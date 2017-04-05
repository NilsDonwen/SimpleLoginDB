<?php
$db = mysqli_connect("localhost", "root", "", "session");
if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}
?>

