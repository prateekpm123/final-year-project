<?php

$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone_number = $_POST['phone_number'];


if ( !empty($username) || !empty($password) || !empty($repassword) || !empty($email) || !empty($gender) || !empty($phone_number)) {
    
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "sih registration";

    // Create connection 
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if ( mysqli_connect_error()) 
    {
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error()); 
    }
    else 
    {
        $SELECT = "SELECT email From login2 Where email = ? Limit 1";
        $INSERT = "INSERT Into login2 (username, passwords, repassword, email, gender, phone_number) values ( ?, ?, ?, ?, ?, ? )";

        // Prepare statement 
        // To check weather EMAIL IS SAME OF NOT
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0)
        {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssii", $username, $password, $repassword, $email, $gender, $phone_number);
            $stmt->execute();
            echo "New record inserted sucessfully";
        }
        else 
        {
            echo "Someone  is already register using this email";
        }
        $stmt->close();
        $conn->close();
    }

}
else {
    echo "All fields are required";
    die();
}

?>