<?php
session_start();
if (
      isset($_SESSION['username']) &&
      isset($_SESSION['role'])
) {
      if ($_SESSION['role'] == 'Admin' && isset($student)) {

?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                  <meta charset="UTF-8">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Admin - Edit Student</title>
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
                  <link rel="stylesheet" href=<?= BURL . "assets/css/style.css" ?>>
                  <link rel="icon" href=<?= LOGO ?>>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            </head>

            <body>
                  <?php include(VIEWS . 'inc' . DS . 'adminNav.php'); ?>

                  <div class="container mt-5">
                        <a href="<?= url('admin/students') ?>" class="btn btn-dark">Go Back</a>

                        <form method="post" class="shadow p-3 mt-5 form-w" action=<?=url("admin/supdate/".$student['student_id'])?>>
                              <h3>Edit Student Info</h3>
                              <hr>
                              <div class="mb-3">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control" value=<?= $student['fname'] ?> name="fname">
                              </div>
                              <div class="mb-3">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-control" value=<?= $student['lname'] ?> name="lname">
                              </div>
                              <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" value=<?= $student['address'] ?> name="address">
                              </div>
                              <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="text" class="form-control" value=<?= $student['email_address'] ?> name="email_address">
                              </div>
                              <div class="mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" class="form-control" value=<?= $student['date_of_birth'] ?> name="date_of_birth">
                              </div>


                              <div class="mb-3">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" value=<?= $student['username'] ?> name="username">
                              </div>
                              <input type="text" value="123456" name="student_id" hidden>
                              <div class="mb-3">
                                    <label class="form-label">Gender</label><br>
                                    <input type="radio" value="Male" <?php if ($student['gender'] == 'Male') echo 'checked'; ?> name="gender"> Male
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" value="Female" <?php if ($student['gender'] == 'Female') echo 'checked';  ?> name="gender"> Female
                              </div>

                              <div class="mb-3">
                                    <label class="form-label">Section</label>
                                    <div class="row row-cols-5">
                                          <div class="col">
                                                <input type="radio" name="section" <?php if ($student['section'] == '1') echo 'checked'; ?> value="1">
                                                A
                                          </div>
                                          <div class="col">
                                                <input type="radio" name="section" <?php if ($student['section'] == '2') echo 'checked'; ?>value="2">
                                                B
                                          </div>
                                          <div class="col">
                                                <input type="radio" name="section" <?php if ($student['section'] == '3') echo 'checked'; ?> value="2">
                                                C
                                          </div>
                                          <div class="col">
                                                <input type="radio" name="section" <?php if ($student['section'] == '4') echo 'checked'; ?>value="2">
                                                D
                                          </div>
                                    </div>
                              </div>
                              <br>
                              <hr>

                              <div class="mb-3">
                                    <label class="form-label">Parent first name</label>
                                    <input type="text" class="form-control" value=<?= $student['parent_fname'] ?> name="parent_fname">
                              </div>
                              <div class="mb-3">
                                    <label class="form-label">Parent last name</label>
                                    <input type="text" class="form-control" value=<?= $student['parent_lname'] ?> name="parent_lname">
                              </div>
                              <div class="mb-3">
                                    <label class="form-label">Parent phone number</label>
                                    <input type="text" class="form-control" value=<?= $student['parent_phone_number'] ?> name="parent_phone_number">
                              </div>

                              <button type="submit" class="btn btn-primary">
                                    Update</button>
                        </form>

                        <form method="post" class="shadow p-3 my-5 form-w" action="req/student-change.php" id="change_password">
                              <h3>Change Password</h3>
                              <hr>
                              <?php if (isset($_GET['perror'])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                          <?= $_GET['perror'] ?>
                                    </div>
                              <?php } ?>
                              <?php if (isset($_GET['psuccess'])) { ?>
                                    <div class="alert alert-success" role="alert">
                                          <?= $_GET['psuccess'] ?>
                                    </div>
                              <?php } ?>

                              <div class="mb-3">
                                    <div class="mb-3">
                                          <label class="form-label">Admin password</label>
                                          <input type="password" class="form-control" name="admin_pass">
                                    </div>

                                    <label class="form-label">New password </label>
                                    <div class="input-group mb-3">
                                          <input type="text" class="form-control" name="new_pass" id="passInput">
                                          <button class="btn btn-secondary" id="gBtn">
                                                Random</button>
                                    </div>

                              </div>
                              <input type="text" value="<?= $student['student_id'] ?>" name="student_id" hidden>

                              <div class="mb-3">
                                    <label class="form-label">Confirm new password </label>
                                    <input type="text" class="form-control" name="c_new_pass" id="passInput2">
                              </div>
                              <button type="submit" class="btn btn-primary">
                                    Change</button>
                        </form>
                  </div>

                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
                  <script>
                        $(document).ready(function() {
                              $("#navLinks li:nth-child(3) a").addClass('active');
                        });

                        function makePass(length) {
                              var result = '';
                              var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                              var charactersLength = characters.length;
                              for (var i = 0; i < length; i++) {
                                    result += characters.charAt(Math.floor(Math.random() *
                                          charactersLength));

                              }
                              var passInput = document.getElementById('passInput');
                              var passInput2 = document.getElementById('passInput2');
                              passInput.value = result;
                              passInput2.value = result;
                        }

                        var gBtn = document.getElementById('gBtn');
                        gBtn.addEventListener('click', function(e) {
                              e.preventDefault();
                              makePass(4);
                        });
                  </script>

            </body>

            </html>

<?php

      } else {
            //header('Location: /');
      }
}
?>