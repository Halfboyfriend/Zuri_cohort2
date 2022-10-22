<?php
if(isset($_POST['submit'])){
    $username = $_POST['name']; //finish this line
    $password = $_POST['password'];   //finish this

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    if ($username == $_POST['email'] && $password == $_POST['password'])
    {
        loginUser($email, $password);
        session_start();
    }
}

echo "HANDLE THIS PAGE";

