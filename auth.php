<?php

?>

<?php
session_start();
if(!isset($_SESSION["FName"])){
header("Location: login.php");
exit(); }
?>
