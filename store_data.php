<?php
$name = $_POST['name'];
$ipAddress = $_POST['ipAddress'];

// Store data in a file
$file = 'user_data.txt';
$currentData = file_get_contents($file);
$currentData .= "Name: $name, IP Address: $ipAddress\n";
file_put_contents($file, $currentData);

echo "Data stored successfully.";
?>
