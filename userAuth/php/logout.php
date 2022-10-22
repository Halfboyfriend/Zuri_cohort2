<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
if ($_SESSION['id']){
    unset($_SESSION['id']);
}
header('Location:login.php');
}

logout();
//Task Completed
echo "HANDLE THIS PAGE";
