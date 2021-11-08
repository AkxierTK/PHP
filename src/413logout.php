<?php
session_start();

// Y la destruimos
session_destroy();
header("Location: 410index.php");
?>

?>