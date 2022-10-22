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
    if ($username == "test" && $password == "test")
    {
        $_SESSION['username'] = $username;
        redirect('/add-property.php');
    } else{
        if (isset($_POST['login'])) {
            echo "Username or password is incorrect";
        }
    }
    
}

echo "HANDLE THIS PAGE";
//Task completed


