<?php
if(isset($_POST['submit'])){
    $email = $_POST['email']; //complete this;
    $newpassword = $_POST['password'];//complete this;


    resetPassword($email, $newpassword);
}

function resetPassword($email, $password){
    //open file and check if the username exist inside
   $file = fopen("../storage/users.csv", "r");

   while(!feof($file)){
    $readCsv = fgetcsv($file);

    //open file and check if the email exist inside
    if ($readCsv[1] == $email) {
        //if yes, replace password

        $readCsv[2] = $password;
        $file = fopen("../storage/users.csv", "w");
        fputcsv($file, $readCsv);

       
        $message = "Password successfully UPDATED";

        echo "<script>
        alert('$message');
        window.location.href='../forms/login.html';
        </script>";

        fclose($file);
        exit;
    } else {
      
        $message = "User Not Found";

        echo "<script>
        alert('$message');
        window.location.href='../forms/resetpassword.html';
        </script>";
    }
   }
}
//echo "HANDLE THIS PAGE";




//Completed
