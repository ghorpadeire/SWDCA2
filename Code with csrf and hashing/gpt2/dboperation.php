<?php
session_start();
include_once 'includes/conn.php';

// Registration
if (isset($_POST['rubtn'])) {
    $role = $_POST['role'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['epass'];
    $rpassword = $_POST['cpass'];

    $photo = $_FILES['photo']['name'];
    $upload = "../upload/" . $photo;
    $path = "upload/" . $photo;
    move_uploaded_file($_FILES['photo']['tmp_name'], $path);

    if ($password != $rpassword) {
        echo "<script>alert('Entered Passwords do not match.')</script>";
        echo "<script>window.open('register.php','_self')</script>";
    } else {
        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            echo "<script>alert('The email is already registered. Please log in.')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO user(role, fname, lname, photo, address, mobile, email, pass) VALUES ('$role', '$fname', '$lname', '$upload', '$address', '$mobile', '$email', '$hashedPassword')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script>alert('User registered successfully.')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
        }
    }
}

// Login
if (isset($_POST['luser'])) {
    $role = $_POST['role'];
    $username = $_POST['email'];
    $password = $_POST['pass'];

    $query = "SELECT * FROM user WHERE email='$username' AND role='$role'";
    $result = mysqli_query($conn, $query);

    foreach ($result as $row) {
        if (password_verify($password, $row['pass'])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['photo'] = $row['photo'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['mobile'] = $row['mobile'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['pass'];
            $_SESSION['role'] = $row['role'];

            if ('Recipient' == $role) {
                $_SESSION['file'] = 'reciept/reciept.php';
                echo "<script>window.open('reciept/reciept.php','_self')</script>";
            } elseif ('Donor' == $_SESSION['role']) {
                $_SESSION['file'] = 'donor/donor.php';
                echo "<script>window.open('donor/donor.php','_self')</script>";
            } elseif ('Admin' == $_SESSION['role']) {
                $_SESSION['file'] = 'admin/admin.php';
                echo "<script>window.open('admin/admin.php','_self')</script>";
            } else {
                echo "<script>alert('Invalid credentials.')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
        }
    }
}

// Password Reset
if (isset($_POST['rpass'])) {
    $role = $_POST['role'];
    $email = $_POST['email'];
    $password = $_POST['epass'];
    $rpassword = $_POST['cpass'];

    $query = "SELECT * FROM user WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        if ($password != $rpassword) {
            echo "<script>alert('Entered Passwords do not match.')</script>";
            echo "<script>window.open('login.php','_self')</script>";
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "UPDATE user SET pass = '$hashedPassword' WHERE email ='$email'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script>alert('Password changed successfully.')</script>";
                echo "<script>window.open('login.php','_self')</script>";
            }
        }
    } else {
        echo "<script>alert('The email is not registered. Enter the correct email or create a new account.')</script>";
        echo "<script>window.open('register.php','_self')</script>";
    }
}

// Other functionalities...
// (e.g., updating profile, adding need types, adding needs, managing users, etc.)

// Close database connection after use.
mysqli_close($conn);
?>
