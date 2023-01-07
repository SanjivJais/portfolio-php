<?php
include('..\connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $pass = $_POST['pass1'];


    $query = "INSERT INTO users (full_name, email, contact_no, pass) VALUES ('$name', '$email', '$contact', '$pass')";
    if (mysqli_query($conn, $query)) {
        // echo "Signup successfully.";
        header('Location: ..\login.php');
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }

}

?>