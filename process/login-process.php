<?php
include('..\connection.php');
$email = $_POST['email'];
$contact = $_POST['contact'];
$pass = $_POST['pass'];

$result = $conn->query("SELECT * FROM users WHERE email='$email' AND contact_no='$contact'");

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    if (password_verify($pass, $user["pass"])) {
        // The login is successful
        // Set the session variables
        $_SESSION["logged_in"] = true;
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $user["email"];

        // Redirect to the home page
        header("Location: /");
    }
    else{

        // The password is incorrect
        // Display an error message
        echo "Invalid username or password";
    }
} else {
    // No user with that username was found
    // Display an error message
    echo "Invalid username or password";
}

?>