<?php
if(isset($_POST['submit'])){
    $email = $_POST['email']; //complete this;
    $newpassword = $_POST['password'];//complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
    $filename = "./users.csv";
    $handle = fopen($filename, "w");
    
    //if it does, replace the password
}
echo "HANDLE THIS PAGE";
