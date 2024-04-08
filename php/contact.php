<?php

include("../php/connection.php");

if ( isset($_POST['submit']) ) {
    $name = $_POST['FullName'];
    $phone = $_POST['Mobile'];
    $email = $_POST['Emails'];
    $msg = $_POST['Messages'];


    $sql = "INSERT INTO enquiries(User_name,phone,email,User_message) VALUES ('$name','$phone','$email','$msg')";
    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo "Errors";
    }
    
    // Close connection when done
    $conn->close();

}

?>