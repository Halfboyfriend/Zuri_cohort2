<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    $data = [$username, $email, $password];


    $file = "../storage/users.csv";
    $file = fopen($file, "r");
    $readCsv = fgetcsv($file);

    if($readCsv[1] == $data[1])
    {
        
        $message = "User Already Exist";

        echo "<script>
        alert('$message');
        window.location.href='../forms/register.html';
        </script>";
    } else
    {
         //save data into the file
    $file = "../storage/users.csv";
    $handle = fopen($file, "a");
    $data_input = implode(",", $_POST) . "\n";
    fwrite($handle, $data_input);
    fclose($handle);

        //send success message and redirect to login page
        $message = "Registration Successful";

        echo "<script>
        alert('$message');
        window.location.href='../forms/login.html';
        </script>";
    }

   
    
   

    //Task Completed
}
//echo "HANDLE THIS PAGE";


