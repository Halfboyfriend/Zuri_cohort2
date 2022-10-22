<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $filename = "./users.csv";
    $handle = fopen($filename, "r");
    $content = fread($handle, filesize($filename));
    fclose($handle);
    
    // echo "OKAY";
    echo "OKAY";
}
echo "HANDLE THIS PAGE";


