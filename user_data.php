<?php

// print_r($_POST);
// $name = $_POST('name');
// $email = $_POST('email');
// $DOB = $_POST('dob');
// $Gender = $_POST('gender');
// $Country = $_POST('country');

$filename = "./userdata.csv";
$handle = fopen($filename, "r");
$content = fread($handle, filesize($filename));
echo $content;
fclose($handle);

print_r($_POST);

?>