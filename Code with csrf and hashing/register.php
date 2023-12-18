<?php
// Start a session:
session_start();

// Generate and store CSRF token:
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Smart home Services</title> </head>

<body>
    <div class="container mt-2 fixed-top d-flex justify-content-between align-content-center">
        <div>
            <a class="nav-link p-0 m-0" href="index.php">
                <p class="text-white font-weight-bold"><b>Help Needy People</b></p>
            </a>
        </div>
        <div>
            <a href="register.php"><button class="btn btn-info text-white m-1 py-0" type="button">Register</button></a>
            <a href="login.php"><button class="btn btn-success py-0" type="button">Login</button></a>
        </div>
    </div>

    <img src="https://us.123rf.com/450wm/vejaa/vejaa1910/vejaa191000188/132789148-adult-and-child-hands-holding-red-heart-over-blue-background-love-healthcare-family-insurance-donati.jpg?ver=6"
        class="position-relative w-100  opacity-25" alt="">
    
        <center>
        <!-- Registration Form -->
        <div style="position: absolute; top:70px; left:130px;  margin:0 auto;" class="w-90 ">
            <div class="container rounded p-2" style="background-color: rgba(0, 0, 0, 0.447);">
                <form action="dbopertion.php" method="post" enctype="multipart/form-data">


                <!-- Security Token: CSRF Protection -->
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                    <div class="row">
                        <div class="col-12 mb-2 mt-2">
                            <select class="form-select" aria-label="Default select example" name="role" style="width:70%;">
        
                            <option>Donor</option>
                                <option>Recipient</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="fname">
                                <label for="floatingInput">Enter First Name</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="lname">
                                <label for="floatingInput">Enter Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="formFile" class="form-label">Upload Profile Photo</label>
                            <input class="form-control" type="file" name="photo">
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <textarea class="form-control" id="floatingInput" placeholder="name@example.com"
                                    name="address" rows="1"></textarea>
                                <label for="floatingInput">Enter Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="mobile">
                                <label for="floatingInput">Enter Mobile Number</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="floatingInput" name="email">
                                <label for="floatingInput">Enter Email Address</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="epass">
                                <label for="floatingInput">Enter Password</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="floatingInput" name="cpass">
                                <label for="floatingInput">Confirm Password</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <center>
                                <input class="btn btn-success justify-content-center" type="submit" value="Register"
                                    name="rubtn">
                            </center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </center>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>



