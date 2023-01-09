<?php
include('..\connection.php');
$email = $_POST['email'];
$contact = $_POST['contact'];
$pass = $_POST['pass'];

$query = "SELECT * FROM users WHERE email='$email' AND contact_no='$contact'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)> 0) {
    $user = mysqli_fetch_assoc($result);
    if ($pass == $user["pass"]) {
        // The login is successful
        // Set the session variables
        $_SESSION["logged_in"] = true;
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["email"] = $user["email"];

        // Redirect to the home page
        header("Location: ..\index.php");
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