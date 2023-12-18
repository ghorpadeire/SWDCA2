<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Example of Auto Loading Bootstrap Modal on Page Load</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
	$(document).ready(function(){
		$("#staticBackdrop2").modal('show');
	});
</script>
    <style>
        .menu a {
            text-decoration: none;
            display: block;
            color: white;
            align-items: center;
            margin: 0 auto;
            margin-left: 30px;
            margin-bottom: 5px;

        }

        .col-4 h3 {
            margin-bottom: 0px;
        }

        .col-4 {
            padding: 15px;

        }
    </style>
     <title>Approve Recipient need</title>
</head>

<body>
    <?php session_start(); ?>
    <div class="row sticky-top">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(50, 234, 191);">
                <div class="container justify-content-between">
                    <div><a class="navbar-brand" href="admin.php">Help Needy People</a></div>
                    <div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-3 vh-100  overflow-auto text-white" style="background-color: rgb(9, 200, 155);">
            <div class="row justify-content-around">
                <?php
                  include_once '../includes/conn.php';
                     $aid=$_SESSION['id'];
          $query="select * from user where id='$aid'";
          $result=mysqli_query($conn,$query);
         while ($row=mysqli_fetch_array($result)){ 
             ?>
                <div class="col-12">
                    <center>
                        <img src=<?=$row['photo']; ?> width="100px" height="100px" alt=""
                        class="rounded-circle border border-white border-5 mt-1">
                    </center>
                </div>
            </div>
            <div class="row  justify-content-around">
                <div class="col-12">
                    <center>
                        <p class="m-0" style="font-size: 20px;">
                            <?= $row['fname']; ?>
                            <?= $row['lname']; ?>
                        </p>
                        <p class="m-0 ">Admin</p>
                    </center>
                </div>
                <?php } ?>

            </div>
            <div class="menu">
                <a href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                        <path
                            d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z" />
                    </svg> &nbsp;Dashboard</a>

                <a href="aprofile.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg> &nbsp;Profile</a>
                <a href="aaddneed.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                        <path
                            d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z" />
                    </svg> &nbsp;Add Need</a>
                <a href="aaprove.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-check2-circle" viewBox="0 0 16 16">
                        <path
                            d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                        <path
                            d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                    </svg> &nbsp;Approve</a>

                <a href="amanageuser.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-clipboard2-minus-fill" viewBox="0 0 16 16">
                        <path
                            d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                        <path
                            d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM6 8h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1 0-1Z" />
                    </svg> &nbsp;Manage User</a>

                <a href="../logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                        fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                        <path fill-rule="evenodd"
                            d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                    </svg> &nbsp;Logout</a>
            </div>
        </div>
        <div class="col-9 vh-100 overflow-auto">
            <h6><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                    <path
                        d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
                </svg>Approve Needy People</h6>
            <div class="row">
                <table class="table table-hover" style="font-size: 15px;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Sr. No.</th>
                            <th scope="col">type</th>
                            <th scope="col">email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">ramount</th>
                            <th>Datails</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
          $query="select * from need where status='1'";
          $result=mysqli_query($conn,$query);
         while ($row=mysqli_fetch_array($result)){ ?>
                        <tr>
                            <form action="../dbopertion.php" method="post" enctype="multipart/form-data">
                            <input type='hidden' value=<?= $row['id']; ?> name='nid'>
                                <th scope="row"><?= $row['id']; ?></th>
                                <td><?= $row['ntype']; ?></td>
                                <?php
                                $rid=$row['rid'];
          $query1="select * from user where id=$rid";
          $result1=mysqli_query($conn,$query1);
         while ($row1=mysqli_fetch_array($result1)){ ?>
          <input type='hidden' value=<?= $row1['id']; ?> name='rid'>
                                <td><?= $row1['email']; ?></td>
                                <td><?= $row1['mobile']; ?></td>
                                <?php } ?>
                                <td><?= $row['ramount']; ?></td>
                                <td><button
                                            style="border:none; background-color:transparent;" type="submit"
                                            name="snrbtn"><svg style="color: rgb(0, 68, 255);"
                                                xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path
                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg></button>
                                </td>
                                <td> <button style="border:none; background-color:transparent;" type="submit"
                                        name="drnbtn"><svg style="color: red;" xmlns="http://www.w3.org/2000/svg"
                                            width="25" height="25" fill="currentColor" class="bi bi-trash3-fill"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg></button> | <button style="border:none; background-color:transparent;"
                                        type="submit" name="arnbtn"> <svg type="submit" style="color: rgb(0, 176, 53);"
                                            xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                            fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </svg></button> </td>
                            </form>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal for view reciept datails -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel2" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">View reciept datails</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <table>
                                <?php
                     $rid=$_SESSION['rid'];
          $query="select * from user where id='$rid'";
          $result=mysqli_query($conn,$query);
         while ($row=mysqli_fetch_array($result)){ 
             ?>
                                    <tr>
                                        <td>
                                            <img src="<?= $row['photo']; ?>" width="200px" height="200px">
                                        </td>
                                        <td>
                                        <?= $row['fname']; ?> <br><?= $row['lname']; ?>
                                        </td>
                                    </tr>
                                  
                                </table>
                            </div>
                        </div>
                        <?php
                     $nid=$_SESSION['nid'];
          $query1="select * from need where id='$nid'";
          $result1=mysqli_query($conn,$query1);
         while ($row1=mysqli_fetch_array($result1)){ 
             ?>
                        <div class="row">
                            <div class="col-12">
                                <center>

                                    <img src="<?= $row1['nphoto']; ?>" class="w-100" alt="need Photo" height="300px" alt="">
                                    <h3><?= $row1['nname']; ?></h3>
                                </center>
                            </div>
                        </div>
                        <div class="row">
                            <table class="table" style="font-size: 20px;">
                                <tr>
                                    <th>
                                        Type:
                                    </th>
                                    <td>
                                    <?= $row1['ntype']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Decription:
                                    </th>
                                    <td>
                                        <p><?= $row1['ndetails']; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Required Amound
                                    </th>
                                    <td>
                                        <p><?= $row1['ramount']; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Last Date:
                                    </th>
                                    <td>
                                        <p><?= $row1['ldate']; ?></p>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <th>
                                        Address:
                                    </th>
                                    <td>
                                    <?= $row['address']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Email:
                                    </th>
                                    <td>
                                    <?= $row['email']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Mobile Number:
                                    </th>
                                    <td>
                                    <?= $row['mobile']; ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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