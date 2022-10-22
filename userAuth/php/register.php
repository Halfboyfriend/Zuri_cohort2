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
    $handle = fopen($filename, "a");
    $data_input = implode(",", $_POST) . "\n";
    fwrite($handle, $data_input);
    fclose($handle);
    
    // echo "OKAY";
    echo "OKAY";

    //Task Completed
}
echo "HANDLE THIS PAGE";
