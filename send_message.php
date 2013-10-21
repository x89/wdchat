<?php
require 'config.php';

$s = $mysqli->prepare("INSERT INTO message (message) VALUES (?)");
$s->bind_param("s", $_POST["message"]);
$s->execute();
?>
