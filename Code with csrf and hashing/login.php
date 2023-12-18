<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Smart home Services</title>
</head>

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

  <img src="./images/lbg.jpg" class="position-relative w-100 vh-100 opacity-50" alt="">

  <div style="position: absolute; top:70px; left: 370px;" class="w-90 text-white">
    <div class="container rounded" style="background-color: rgba(0, 0, 0, 0.447);">
      <div class="row justify-content-center p-1">
        <div class="col-12">
          <div class="mb-3">
            <!-- Removed unnecessary form tag, since there is an extra form tag -->
            <select class="form-select" aria-label="Default select example" name="role">
              <option>Admin</option>
              <option>Donor</option>
              <option>Recipient</option>
            </select>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="mb-3">
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email"
              name="email">
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter password"
              name="pass">
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-7 ">
          <div class="form-check">
            <input class="form-check-input " type="checkbox" value="" id="form2Example31" checked />
            <label class="form-check-label" for="form2Example31"> Remember_me </label>
          </div>
        </div>
        <div class="col-5">
          <a href="#!" data-bs-toggle="modal" data-bs-target="#forgotmodal" style="font-size: 1px;">Forgot
            password?</a>
        </div>
      </div>
      <div class="row justify-content-center mt-1">
        <div class="col-12">
          <div class="mb-3">
            <center>
              <input class="btn btn-success justify-content-center" type="submit" value="Login" name="luser">
            </center>
            <p class="float-end mt-1" style="font-size: 1px;">Not a member?<a href="register.php">Register</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Forget password-->
  <div class="modal fade" id="forgotmodal" tabindex="-1" aria-labelledby="forgotModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Removed unnecessary form tag, since there is an extra form tag -->
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <select class="form-select" aria-label="Default select example" name="role">
                    <option>Admin</option>
                    <option>Donor</option>
                    <option>Recipient</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email"
                    name="email">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <input type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="Enter New password" name="epass">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="mb-3">
                  <input type="password" class="form-control" id="exampleFormControlInput1"
                    placeholder="Confirm New password" name="cpass">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-1">
              <div class="col-12">
                <div class="mb-3">
                  <center>
                    <input class="btn btn-success justify-content-center" type="submit" value="Reset" name="rpass">
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+Nz5sz/TzO6bqDjI+Vr5LX4e5nHcZtP4QfaZBpQ" crossorigin="anonymous"></script>
</body>

</html>
