<?php
session_start();
include("../../db.php");
include "sidenav.php";
include "topheader.php";

if (isset($_POST['btn_save'])) {
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $user_password = mysqli_real_escape_string($con, $_POST['password']);
    $mobile = mysqli_real_escape_string($con, $_POST['phone']);
    $address1 = mysqli_real_escape_string($con, $_POST['city']);
    $address2 = mysqli_real_escape_string($con, $_POST['country']);

  
    $query = "INSERT INTO user_info (first_name, last_name, email, password, mobile, address1, address2) 
              VALUES ('$first_name', '$last_name', '$email', '$user_password', '$mobile', '$address1', '$address2')";

    if (mysqli_query($con, $query)) {
        echo "<div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>User added successfully!</b>
              </div>";
    } else {
        echo "<div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Failed to add user. Please try again.</b>
              </div>";
    }
    mysqli_close($con);
}
?>
<!-- End Navbar -->
<div class="content">
    <div class="container-fluid">
        <!-- your content here -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Add User</h4>
                    <p class="card-category">Profile</p>
                </div>
                <div class="card-body">
                    <form action="" method="post" name="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">First Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Phone Number</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">City</label>
                                    <input type="text" name="city" id="city" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group bmd-form-group">
                                    <label class="bmd-label-floating">Country</label>
                                    <input type="text" name="country" id="country" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="btn_save" id="btn_save" class="btn btn-primary pull-right">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>
