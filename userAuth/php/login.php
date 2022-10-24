<?php
session_start();
if(isset($_POST['submit'])){
  //  $username = $_POST['name']; //finish this line
    $password = $_POST['password']; //finish this
    $email = $_POST['email'];

loginUser($email, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password 
    from file match that which is passed from the form
    */
    $file = fopen("../storage/users.csv", "r");
    $readCsv = fgetcsv($file);

    if($readCsv[1] == $email && $readCsv[2] == $password)
    {
        echo "Login Successfully";

        $_SESSION['username'] = $readCsv[0];

        header('location: ../dashboard.php');
    }
    else {

        $message = "Invalid data input";

        echo "<script>
        alert('$message');
        window.location.href='../forms/login.html';
        </script>";
    }
    
}


//echo "HANDLE THIS PAGE";


//Task completed
