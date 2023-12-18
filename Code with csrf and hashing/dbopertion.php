<?php
// Start a session:
session_start();
// Include database connection file:
include_once 'includes/conn.php';
require_once __DIR__ . '/vendor/autoload.php';

// use includes\conn;


// ------------------------ I tried PASSWORD hashing using password_hash password got hashed successfullly ------------------------

// Handle user registration:
// if(isset($_POST['rubtn'])) {
//     // Extract form data:
//     $role = $_POST['role'];
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $address = $_POST['address'];
//     $mobile = $_POST['mobile'];
//     $email = $_POST['email'];
//     $password = $_POST['epass'];
//     $rpassword = $_POST['cpass'];

//     // Upload user profile photo:
//     $photo = $_FILES['photo']['name'];
//     $upload = "../upload/" . $photo;
//     $path = "upload/" . $photo;
//     move_uploaded_file($_FILES['photo']['tmp_name'], $path);

//     // Check if password and re-entered password match:
//     if ($password != $rpassword) {
//         echo "<script>alert('Entered Password and Reentered Password do not match.')</script>";
//         echo "<script>window.open('register.php','_self')</script>";
//     } else {
//         // Check if the email is already registered:
//         $query = "SELECT * FROM user WHERE email='$email'";
//         $result = mysqli_query($conn, $query);
        
//         if (mysqli_num_rows($result) == 1) {
//             echo "<script>alert('The email address is already registered. If you already have an account, please log in.')</script>";
//             echo "<script>window.open('index.php','_self')</script>";
//         } else {
//             // Insert new user into the database:
//             $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
//             $query = "INSERT INTO user(role, fname, lname, photo, address, mobile, email, pass) VALUES('$role','$fname','$lname','$upload','$address','$mobile','$email','$hashedPassword')";
//             $result = mysqli_query($conn, $query);

//             if ($result) {
//                 var_dump($hashed_password);
//                 echo "<script>alert('User registered successfully.')</script>";
//                 echo "<script>window.open('login.php','_self')</script>";
//             }
//         }
//     }
// }
// Handle user login:



// ------------------------ I tried PASSWORD hashing using  password_verify() but did not worked ------------------------



// if(isset($_POST['luser'])) {
//     $role = $_POST['role'];
//     $username = $_POST['email'];
//     $password = $_POST['pass'];

//     // Retrieve user information from the database:
//     $query = "SELECT * FROM user WHERE email='$username' AND role='$role'";
//     $result = mysqli_query($conn, $query);

//     if ($result && $row = mysqli_fetch_assoc($result)) {
//         // Verify the password
//         if (password_verify($password, $row['pass'])) {
//             // Store user information in the session:
//             $_SESSION['id'] = $row['id'];
//             $_SESSION['fname'] = $row['fname'];
//             $_SESSION['lname'] = $row['lname'];
//             $_SESSION['photo'] = $row['photo'];
//             $_SESSION['address'] = $row['address'];
//             $_SESSION['mobile'] = $row['mobile'];
//             $_SESSION['email'] = $row['email'];
//             $_SESSION['password'] = $row['pass'];
//             $_SESSION['role'] = $row['role'];

//             // Redirect based on user role:
//             if ($role == 'Recipient' && $_SESSION['email'] == $username) {
//                 $_SESSION['file'] = 'reciept/reciept.php';
//                 echo "<script>window.open('reciept/reciept.php','_self')</script>";
//             } elseif ($role == 'Donor' && $_SESSION['email'] == $username) {
//                 $_SESSION['file'] = 'donor/donor.php';
//                 echo "<script>window.open('donor/donor.php','_self')</script>";
//             } elseif ($role == 'Admin' && $_SESSION['email'] == $username) {
//                 $_SESSION['file'] = 'admin/admin.php';
//                 echo "<script>window.open('admin/admin.php','_self')</script>";
//             } else {
//                 echo "<script>alert('Incorrect credentials.')</script>";
//                 echo "<script>window.open('login.php','_self')</script>";
//             }
//         } else {
//             // Password is incorrect
//             echo "<script>alert('Incorrect password credentials.')</script>";
//             echo "<script>window.open('login.php','_self')</script>";
//         }
//     } else {
//         // User not found in the database
//         echo "<script>alert('Incorrect user not found credentials.')</script>";
//         echo "<script>window.open('login.php','_self')</script>";
//     }
// }

//--------------------------------------------------------------------------------------------------------------------------------

//---------------------------------------------- OLD code ----------------------------------------------


// if(isset($_POST['rubtn']))
// {
//     $role=$_POST['role'];
//     $fname=$_POST['fname'];
//     $lname=$_POST['lname'];
//     $address=$_POST['address'];
//     $mobile=$_POST['mobile'];
//     $email=$_POST['email'];
//     $password=$_POST['epass'];
//     $rpassword=$_POST['cpass'];

//     $photo=$_FILES['photo']['name'];
// 		$upload="../upload/".$photo;
//         $path="upload/".$photo;
//     move_uploaded_file($_FILES['photo']['tmp_name'], $path);

//     if($password != $rpassword){
//         echo "<script>alert('Enter Password And Reenter Password Are not same')</script>";
//         echo "<script>window.open('register.php','_self')</script>";
//     }
//     else
//     {
//         $query="select * from user where email='$email'";
//         $result=mysqli_query($conn,$query);
//         if(mysqli_num_rows($result)==1)
//         {
//             echo "<script>alert('the emailid is already registrate do you already register then login')</script>";
//             echo "<script>window.open('index.php','_self')</script>";
        
//         }
//         else
//         {
//             $query="insert into user(role,fname,lname,photo,address,mobile,email,pass)values('$role','$fname','$lname','$upload','$address','$mobile','$email','$password')";
//             $result=mysqli_query($conn,$query);
//            if($result)
//            {
       
//              echo "<script>alert('user Register Sucessfully.')</script>";
//                echo "<script>window.open('login.php','_self')</script>";
//            }
//         }
//     }
// }

// if(isset($_POST['luser']))
// {
//     $role=$_POST['role'];
// 	  $username=$_POST['email'];
// 	  $password=$_POST['pass'];

//         $query="select * from user where email='$username' and role='$role' and pass='$password'";
//         $result=mysqli_query($conn,$query);
//         foreach($result as $row)
//         {
//             $_SESSION['id']=$row['id'];
//             $_SESSION['fname']=$row['fname'];
//             $_SESSION['lname']=$row['lname'];
//             $_SESSION['photo']=$row['photo'];
//             $_SESSION['address']=$row['address'];
//             $_SESSION['mobile']=$row['mobile'];
//             $_SESSION['email']=$row['email'];
//             $_SESSION['password']=$row['pass'];
//             $_SESSION['role']=$row['role'];
//         }
//         if('Recipient'==$role && $_SESSION['email']==$username &&  $_SESSION['password']==$password)
//           {
//             $_SESSION['file']='reciept/reciept.php';
//             echo "<script>window.open('reciept/reciept.php','_self')</script>";
//           }
//         if('Donor'==$_SESSION['role'] && $_SESSION['email']==$username &&  $_SESSION['password']==$password)
//         {
//             $_SESSION['file']='donor/donor.php';
//             echo "<script>window.open('donor/donor.php','_self')</script>";
//         }
//         if('Admin'==$_SESSION['role'] && $_SESSION['email']==$username &&  $_SESSION['password']==$password)
//         {
//             $_SESSION['file']='admin/admin.php';
//             echo "<script>window.open('admin/admin.php','_self')</script>";
//         }
//           else
//           {
//             echo "<script>alert('you enter wrong credential.')</script>";
//             echo "<script>window.open('login.php','_self')</script>";
//           }
// }


// ----------------------------------------- code that implements csrf  ----------------------------------------- 
// Security Check: CSRF Protection
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
      die('CSRF token mismatch.');
  }
}

// Handle user registration:
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
      echo "<script>alert('Enter Password And Reenter Password Are not same')</script>";
      echo "<script>window.open('register.php','_self')</script>";
  } else {
      $query = "select * from user where email='$email'";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) == 1) {
          echo "<script>alert('the emailid is already registrate do you already register then login')</script>";
          echo "<script>window.open('index.php','_self')</script>";
      } else {
          $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
          $query = "INSERT INTO user(role, fname, lname, photo, address, mobile, email, pass) VALUES('$role','$fname','$lname','$upload','$address','$mobile','$email','$hashedPassword')";
          $result = mysqli_query($conn, $query);

          if ($result) {
              echo "<script>alert('User registered successfully.')</script>";
              echo "<script>window.open('login.php','_self')</script>";
          }
      }
  }
}

// Handle user login:
if (isset($_POST['luser'])) {
  $role = $_POST['role'];
  $username = $_POST['email'];
  $password = $_POST['pass'];

  $query = "SELECT * FROM user WHERE email='$username' AND role='$role'";
  $result = mysqli_query($conn, $query);

  if ($result && $row = mysqli_fetch_assoc($result)) {
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

          if ($role == 'Recipient' && $_SESSION['email'] == $username) {
              $_SESSION['file'] = 'reciept/reciept.php';
              echo "<script>window.open('reciept/reciept.php','_self')</script>";
          } elseif ($role == 'Donor' && $_SESSION['email'] == $username) {
              $_SESSION['file'] = 'donor/donor.php';
              echo "<script>window.open('donor/donor.php','_self')</script>";
          } elseif ($role == 'Admin' && $_SESSION['email'] == $username) {
              $_SESSION['file'] = 'admin/admin.php';
              echo "<script>window.open('admin/admin.php','_self')</script>";
          } else {
              echo "<script>alert('Incorrect credentials.')</script>";
              echo "<script>window.open('login.php','_self')</script>";
          }
      } else {
          echo "<script>alert('Incorrect password credentials.')</script>";
          echo "<script>window.open('login.php','_self')</script>";
      }
  } else {
      echo "<script>alert('Incorrect user not found credentials.')</script>";
      echo "<script>window.open('login.php','_self')</script>";
  }
}

// Handle password reset:
if(isset($_POST['rpass'])) {
  $role = $_POST['role'];
  $email = $_POST['email'];
  $password = $_POST['epass'];
  $rpassword = $_POST['cpass'];

  // Check if the email is registered:
  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 1) {
      // Check if the entered password and re-entered password match:
      if($password != $rpassword) {
          echo "<script>alert('Entered Password and Reentered Password do not match.')</script>";
          echo "<script>window.open('login.php','_self')</script>";
      } else {
          // Update the password in the database:
          $query = "UPDATE user SET pass = '$password' WHERE email ='$email'";
          $result = mysqli_query($conn, $query);

          if($result) {
              echo "<script>alert('Password changed successfully.')</script>";
              echo "<script>window.open('login.php','_self')</script>";
          }
      }
  } else {
      echo "<script>alert('The email address is not registered. Please enter the correct email or create a new account.')</script>";
      echo "<script>window.open('register.php','_self')</script>";
  }
}// Handle user profile update:
if(isset($_POST['upbtn'])) {
  $id = $_POST['id'];
  $role = $_POST['role'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $address = $_POST['address'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $photo = $_FILES['photo']['name'];

  // Set default values if address is not provided:
  if($address == "") {
      $address = $_SESSION['address'];
  }

  // Set default values if photo is not provided:
  if($photo == "") {
      $photo = $_SESSION['photo'];
      $upload = $photo;
      move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
  } else {
      $upload = "../upload/" . $photo;
      move_uploaded_file($_FILES['photo']['tmp_name'], $upload);
  }

  // Update user profile in the database:
  $query = "UPDATE `user` SET `fname` = '$fname',`lname` = '$lname',`photo` = '$upload',`address` = '$address',`mobile` = '$mobile',`email` = '$email' WHERE `id` ='$id'";
  $result = mysqli_query($conn, $query);

  if($result) {
      echo "<script>alert('Profile updated successfully.')</script>";

      // Redirect based on user role:
      if($role == 'Admin') {
          echo "<script>window.open('admin/aprofile.php','_self')</script>";
      } elseif($role == 'Donor') {
          echo "<script>window.open('donor/dprofile.php','_self')</script>";
      } elseif($role == 'Recipient') {
          echo "<script>window.open('reciept/rprofile.php','_self')</script>";
      }
  }
}if(isset($_POST['antbtn'])){
  $type=$_POST['type'];
  $query="insert into needtype(type)values('$type')";
            $result=mysqli_query($conn,$query);
           if($result)
           {
       
             echo "<script>alert('Need type Added Sucessfully.')</script>";
               echo "<script>window.open('admin/aaddneed.php','_self')</script>";
           }
}if(isset($_POST['anbtn'])){
  $rid=$_POST['rid'];
  $ntype=$_POST['ntype'];
  $nname=$_POST['nname'];
  $ndetail=$_POST['ndetail'];
  $ramount=$_POST['ramount'];
  $ldate=$_POST['ldate'];
  $photo=$_FILES['nphoto']['name'];
  $upload="../upload/".$photo;
      $path="upload/".$photo;
  move_uploaded_file($_FILES['nphoto']['tmp_name'], $path);

  $query="insert into need(rid,ntype,nphoto,nname,ndetails,ramount,ldate,status)values('$rid','$ntype','$upload','$nname','$ndetail','$ramount','$ldate','1')";
            $result=mysqli_query($conn,$query);
           if($result)
           {
             echo "<script>alert('Need Added Sucessfully.')</script>";
               echo "<script>window.open('reciept/addhelp.php','_self')</script>";
           }
}if(isset($_POST['snrbtn'])){
    $nid=$_POST['nid'];
    $rid=$_POST['rid'];
    $_SESSION['nid']=$nid;
    $_SESSION['rid']=$rid;
    echo "<script>window.open('admin/aaprovev.php','_self')</script>";
}if(isset($_POST['drnbtn'])){
    $nid=$_POST['nid'];
    $query="DELETE FROM need WHERE id=$nid";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo "<script>alert('Delete need suceessfuly.')</script>";
            echo "<script>window.open('admin/aaprove.php','_self')</script>";
        }
}if(isset($_POST['arnbtn'])){
  $nid=$_POST['nid'];
  $query="UPDATE `need` SET `status` ='0' WHERE `id` ='$nid'";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    echo "<script>alert('Approve Recipient suceessfuly.')</script>";
    echo "<script>window.open('admin/aaprove.php','_self')</script>";
  }
}if(isset($_POST['smubtn'])){
    $uid=$_POST['uid'];
    $_SESSION['uid']=$uid;
    echo "<script>window.open('admin/amanageuserv.php','_self')</script>";
}if(isset($_POST['dmubtn'])){
    $uid=$_POST['uid'];
    $query="DELETE FROM user WHERE id=$uid";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo "<script>alert('Delete user suceessfuly.')</script>";
            echo "<script>window.open('admin/amanageuser.php','_self')</script>";
        }
}if(isset($_POST['shdbtn'])){
    $nid=$_POST['nid'];
    $rid=$_POST['rid'];
    $_SESSION['nid']=$nid;
    $_SESSION['rid']=$rid;
    echo "<script>window.open('donor/dhelpv.php','_self')</script>";
}if(isset($_POST['ah'])){
  $nid=$_POST['nid'];
  $rid=$_POST['rid'];
  $did=$_POST['did'];
  $hamount=$_POST['hamount'];
  $query="insert into help(nid,did,rid,hamount,status)values('$nid','$did','$rid','$hamount','1')";
            $result=mysqli_query($conn,$query);
           if($result)
           {
             echo "<script>alert('help Added Sucessfully.')</script>";
               echo "<script>window.open('donor/dhelp.php','_self')</script>";
           }
}if(isset($_POST['srbtn'])){
    $uid=$_POST['did'];
    $_SESSION['uid']=$uid;
    echo "<script>window.open('reciept/snotifictionv.php','_self')</script>";
}if(isset($_POST['ddn'])){
  $hid=$_POST['hid'];
  $query="UPDATE `help` SET `status` ='2' WHERE `id` ='$hid'";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    echo "<script>alert('Delete notifiction suceessfuly.')</script>";
    echo "<script>window.open('donor/dnotifiction.php','_self')</script>";
  }
}if(isset($_POST['srtd'])){
  $hid=$_POST['hid'];
  $message=$_POST['message'];
  $query="UPDATE `help` SET `status` ='0',`message` ='$message' WHERE `id` ='$hid'";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    echo "<script>alert('Send Replay suceessfuly.')</script>";
    echo "<script>window.open('reciept/snotifiction.php','_self')</script>";
  }
}if(isset($_POST['sdnbtn'])){
    $nid=$_POST['nid'];
    $rid=$_POST['rid'];
    $_SESSION['nid']=$nid;
    $_SESSION['rid']=$rid;
    echo "<script>window.open('donor/dnotifictionv.php','_self')</script>";
}


// ... (Continue handling other actions)

// Close the database connection:
mysqli_close($conn);
?>
