<?php
// Code originaly found at w3schools.com Modified by lawrence @  lawrencetech.online 
$myfile = fopen("/var/www/html/login/chat.txt", "w+") or die("Unable to open file! So no clear.");
$txt = "SERVER     | CHAT CLEARED BY OWNER\n";
fwrite($myfile, $txt);
fclose($myfile);
echo("Chat cleared successfuly.")
?>
