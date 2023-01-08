<?php
include('..\connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aboutText = $_POST['aboutField'];
    $query = "UPDATE `users` SET `about`='$aboutText' WHERE id='3'";
    if (mysqli_query($conn, $query)) {
        header('Location: ..\index.php');
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }
}
?>