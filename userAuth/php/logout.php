<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
session_start();

if ($_SESSION['username']){
    session_unset();
    session_destroy();
    header('location: ../index.php');
    exit;
}
}

logout();

//echo "HANDLE THIS PAGE";
