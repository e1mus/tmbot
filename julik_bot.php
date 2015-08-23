<?php
$botToken = "111856683:AAGMXyOuqv_YU9yft_PDSEr-n3Kk6pQJYJs";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

print_r($update);
 
?>
