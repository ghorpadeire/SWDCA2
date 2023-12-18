

<?php
session_start();
include_once 'includes/conn.php';

if (isset($_POST['forgot_pass'])) {
    $fname = $_POST['fname']; // Assuming you have a form field for entering the first name
    $email = $_POST['email']; // Assuming you have a form field for entering the email
    $password = $row['passw'];
    $query = "SELECT * FROM user WHERE fname='$fname' AND email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $userPassword = $row['pass']; // Assuming the password column in the database is 'pass'
        
        // Here you can send an email to the user with their password or provide some other means of password retrieval
        // For security reasons, it is generally not recommended to display or send passwords directly.
        // if(password_verify($password, $userPassword)) {
            echo "<script>alert('Your password entered is: $Password');</script>";
        echo "<script>alert('Your password is: $userPassword');</script>";
    // }
    } else {
        echo "<script>alert('User not found. Please check the entered information.');</script>";
    }
}
?>


