<?php
include('..\connection.php');
$user_id = $_GET['id'];
$identifier = $_GET['value'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {





    if ($identifier == "name") {
        $user_full_name = $_POST['fullName'];
        $query = "UPDATE users SET full_name = '$user_full_name' WHERE id = '$user_id'";
    } else if ($identifier == "about"){

        $aboutText = $_POST['aboutField'];
        $query = "UPDATE users SET about='$aboutText' WHERE id='$user_id'";
    }
    else{
        $skillName = $_POST['skillName'];
        $query = "INSERT INTO skills (skill_name, user_id) VALUES ('$skillName', '$user_id')";
    }
    if (mysqli_query($conn, $query)) {
        header('Location: ..\index.php');
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }






}
?>