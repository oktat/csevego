<?php
$message = $_POST['message'];
$file = "messages.txt";
$current = file_exists($file) ? file_get_contents($file) : "";
$current .= date("Y-m-d H:i:s") . ": " . $message . "\n";
file_put_contents($file, $current);
?>
