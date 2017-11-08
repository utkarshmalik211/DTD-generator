<?php
	$output = shell_exec('java -jar temp.jar -I xml -O dtd temp.xml temp.txt 2>&1');
	echo $output;
	$myfile = fopen("temp.txt", "r") or die("Unable to open file!");
	echo (fread( $myfile , filesize("temp.txt")));
	fclose($myfile);
?>

