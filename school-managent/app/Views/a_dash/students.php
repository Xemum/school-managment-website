<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin - Students</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="icon" href=<?= LOGO ?>>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
      <?php include(VIEWS . 'inc' . DS . 'adminNav.php'); ?>

      <div class="container mt-5">
            <a href="#" class="btn btn-dark">Add New Student</a>
            <form action="#" class="mt-3 n-table" method="get">
                  <div class="input-group mb-3">
                        <input type="text" class="form-control" name="searchKey" placeholder="Search...">
                        <button class="btn btn-primary">
                              <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                  </div>
            </form>


            <div class="table-responsive">
                  <table class="table table-bordered mt-3 n-table">
                        <thead>
                              <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Action</th>
                              </tr>
                        </thead>
                        <tbody>
                              <?php
                              $i = 1; // Move $i outside of the loop to ensure it increments correctly
                              foreach ($students as $student) { ?>
                                    <?php
                                    $student_url = BURL . "admin/sview/" . $student['username'];
                                    $edit_url = BURL . "admin/edits/" . $student['username'];
                                    $delete_url = BURL . "admin/delete/" . $student['username'];
                                    ?>
                                    <tr>
                                          <th scope="row"><?= $i++ ?></th>
                                          <td><?= $student['student_id'] ?></td>
                                          <td><a href=<?= $student_url ?>><?= $student['fname'] ?></a></td>
                                          <td><?= $student['lname'] ?></td>
                                          <td><?= $student['username'] ?></td>
                                          <td><?= $student['grade'] ?></td>
                                          <td>
                                                <a href=<?= $edit_url ?> class="btn btn-warning">Edit</a>
                                                <a href=<?= $delete_url ?> class="btn btn-danger">Delete</a>
                                          </td>
                                    </tr>
                              <?php }; ?>
                        </tbody>
                  </table>
            </div>

      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
      <script>
            $(document).ready(function() {
                  $("#navLinks li:nth-child(3) a").addClass('active');
            });
      </script>
</body>

</html>