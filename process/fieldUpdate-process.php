<?php
include('..\connection.php');
$user_id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aboutText = $_POST['aboutField'];
    $query = "UPDATE users SET about='$aboutText' WHERE id='$user_id'";
    if (mysqli_query($conn, $query)) {
        header('Location: ..\index.php');
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
}
?>