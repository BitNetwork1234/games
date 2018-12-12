<?php
$filename = '/login/chat.txt'; 

if (file_exists($filename)) { 
	chmod($filename, 0777);
	echo "The file $filename exists";
} else { 
	echo "The file $filename does not exist"; 
}
?>
